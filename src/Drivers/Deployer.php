<?php
/**
 * Created by PhpStorm.
 * User: livanrodriguez
 * Date: 2019-01-09
 * Time: 20:47
 */

namespace Livan2r\Deployer\Drivers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livan2r\Deployer\Mail\EnvoyNotify;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class Deployer
{
    /**
     * Deploy application
     *
     * @param $payload
     *
     * @return string
     */
    public function deploy($payload=null)
    {
        // check if the service is enabled
        if (!config('deployer.enabled', true))
            return null;

        // get the payload data
        $driver = '\\Livan2r\\Deployer\\Drivers\\' . config('deployer.driver', 'Github');
        $payload = $driver::getPayload($payload);
        if (empty($payload) || $payload->ref !== config('deployer.ref', null))
            return null;

        // run the scripts
        $this->run($payload);

        // return the repository name
        return $payload->repository;
    }

    /**
     * Run the scripts for the updated repository
     *
     * @param $payload
     *
     * @return array
     */
    public function run($payload)
    {
        $projects = config('deployer.projects', []);
        if (empty($projects[$payload->repository]))
            return ['status' => 'fail', 'message'=> 'Payload empty'];

        // run each task
        $results = [];
        foreach ($projects[$payload->repository] as $item) {
            $results[$item] = $this->runEnvoyScripts($item);
        }

        //send the notifications
        $notifyEmail = config('deployer.notify', null);
        if ($notifyEmail) {
            Mail::to($notifyEmail)
                ->send(new EnvoyNotify($projects, $results, $payload));
        }
        $this->logResults($projects, $results, $payload);


        return [
            'status'  => 'success',
            'message' => 'Everything was fine',
            'results' => $results,
        ];
    }

    /**
     * Run the envoy task
     *
     * @param $task
     *
     * @return string
     */
    public function runEnvoyScripts($task)
    {
        // run the task
        $command = base_path().'/vendor/bin/envoy';
        $process = new Process([$command, 'run', $task], base_path());
        $process->setTimeout(null);
        try {
            $process->mustRun();
            return $process->getOutput();
        } catch (ProcessFailedException $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * Write the results to the laravel logs
     *
     * @param $projects
     * @param $results
     * @param $payload
     */
    public function logResults($projects, $results, $payload)
    {
        $string = [];
        $string[] = "Deploy notification";
        $string[] = "Project: " . env('APP_NAME', 'App name');
        foreach ($projects as $repository => $tasks) {
            $string[] = "Repository: $repository";
            $string[] = "Message: '{$payload->message}'";
            foreach ($tasks as $task) {
                $string[] = "Task: $task";
                if (!empty($results[$task])) {
                    $string[] = $results[$task];
                } else {
                    $string[] = 'Not ran';
                }
            }
        }
        LOG::info(join("\n", $string));
    }
}

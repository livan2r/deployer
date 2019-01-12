<?php

namespace Livan2r\Deployer\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnvoyNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $results;
    public $projects;

    /**
     * Create a new message instance.
     *
     * @param $projects
     * @param $results
     */
    public function __construct($projects, $results)
    {
        $this->projects = $projects;
        $this->results = $results;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->view('Deployer::notify');
    }
}

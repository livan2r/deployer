<?php
/**
 * Created by PhpStorm.
 * User: livanrodriguez
 * Date: 2019-01-09
 * Time: 20:47
 */

namespace Livan2r\Deployer\Drivers;


class Github implements DriverInterface
{
    /**
     * Return payload data
     *
     * @param $payload
     *
     * @return string
     */
    static public function getPayload($payload){
        if (config('deployer.secret')) {
            $payload = $payload; //todo decode the payload
        }

        $payload = json_decode($payload);
        if (empty($payload))
            return null;

        return (object) [
            'action'     => $payload->action,
            'repository' => $payload->repository->name,
            'sender'     => $payload->sender->login
        ];
    }
}

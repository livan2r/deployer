<?php
/**
 * Created by PhpStorm.
 * User: livanrodriguez
 * Date: 2019-01-09
 * Time: 20:28
 */

namespace Livan2r\Deployer\Drivers;

interface DriverInterface
{
    /**
     * Return payload data
     *
     * @param $payload
     *
     * @return string
     */
    static public function getPayload($payload);
}

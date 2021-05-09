<?php
namespace Identimo\Factory;

use YPHP\Factory\RestApiEntityFactory;
use Identimo\Permission;
use Identimo\Storage\PermissionStorage;


class RestApiPermissionFactory extends RestApiEntityFactory{
    const ENTITY = Permission::class;
    const STORAGE = PermissionStorage::class;
    const ENDPOINT = "permissions";

    /**
     * Get the value of strategys
     *
     * @return  StrategyInterface[]
     */ 
    public function getStrategys()
    {
        return [

        ];
    }
}
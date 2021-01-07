<?php
namespace Identimo\Factory;

use YPHP\Factory\RestApiEntityFactory;
use Identimo\PermissionCode;
use Identimo\Storage\PermissionCodeStorage;


class RestApiStreamFactory extends RestApiEntityFactory{
    const ENTITY = PermissionCode::class;
    const STORAGE = PermissionCodeStorage::class;
    const ENDPOINT = "permission_codes";

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
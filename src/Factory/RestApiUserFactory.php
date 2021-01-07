<?php
namespace Identimo\Factory;

use YPHP\Factory\RestApiEntityFactory;
use Identimo\User;
use Identimo\Storage\UserStorage;


class RestApiStreamFactory extends RestApiEntityFactory{
    const ENTITY = User::class;
    const STORAGE = UserStorage::class;
    const ENDPOINT = "users";

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
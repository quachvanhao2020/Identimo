<?php
namespace Identimo\Factory;
use Laminas\Hydrator\Strategy\DateTimeArrayFormatterStrategy;
use Laminas\Hydrator\Strategy\EnumStrategy;
use Laminas\Hydrator\Strategy\NewClassStrategy;
use Laminas\Hydrator\Strategy\StorageStrategy;
use Laminas\Hydrator\HydratorInterface;
use YPHP\Factory\ExcelEntityFactoryTrait;
use Laminas\Hydrator\Strategy\Serializable\StaticServer;
use Laminas\Hydrator\Strategy\StreamStrategy;
use Identimo\User;
use Identimo\Storage\UserStorage;

class ExcelUserFactory extends BaseUserFactory{
    use ExcelEntityFactoryTrait;

    /**
     * Get the value of strategys
     *
     * @return  StrategyInterface[]
     */ 
    public static function getStrategys(HydratorInterface $hydrator)
    {
        $minimum_new_class = new NewClassStrategy($hydrator);
        $new_class = new NewClassStrategy($hydrator,false);
        $storage_strategy = new StorageStrategy();
        $stream_strategy = new StreamStrategy(new StaticServer);
        return [
            User::PARENT => [
                "strategy" => $minimum_new_class,
                "recursive" => true,
                "children" => [],
            ],
            User::STATUS => [
                "strategy" => new EnumStrategy(),
                "recursive" => true,
                "children" => [],
            ],
            User::DATECREATED => [
                "strategy" => new DateTimeArrayFormatterStrategy(),
                "recursive" => true,
                "children" => [],
            ],
        ];
    }

    /**
     * Get the value of storage
     *
     * @return  UserStorage
     */ 
    public function getStorage()
    {
        if(!$this->storage) $this->storage = new UserStorage();
        return $this->storage;
    }

    public function getClassEntity(){
        return User::class;
    }

    protected function _convertArraySheet(array &$array){
        return;
    }
}
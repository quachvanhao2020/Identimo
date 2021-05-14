<?php
namespace Identimo\Storage;

use Identimo\Storage\Iterator\GhostIterator;
use Identimo\Ghost;
use YPHP\Storage\EntityStorage;

class GhostStorage extends EntityStorage{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return GhostIterator
     */
    public function getIterator()
    {
        return new GhostIterator($this->storage);
    }


    /**
     * Get the value of storage
     *
     * @return  Ghost[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

            /**
     * Set the value of storage
     *
     * @param  \Identimo\Ghost[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}
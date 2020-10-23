<?php
namespace Societymo\Storage;

use YPHP\ArrayObject;
use Identimo\Storage\Iterator\GhostIterator;
use Identimo\Ghost;

class GhostStorage extends ArrayObject{

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
     * @param  Ghost[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}
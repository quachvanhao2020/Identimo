<?php
namespace Societymo\Storage;

use YPHP\ArrayObject;
use Identimo\Storage\Iterator\AdminIterator;
use Identimo\Admin;

class AdminStorage extends ArrayObject{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return AdminIterator
     */
    public function getIterator()
    {
        return new AdminIterator($this->storage);
    }


    /**
     * Get the value of storage
     *
     * @return  Admin[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

            /**
     * Set the value of storage
     *
     * @param  Admin[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}
<?php
namespace Identimo\Storage;

use YPHP\ArrayObject;
use Identimo\Storage\Iterator\PermissionIterator;
use Identimo\Permission;

class PermissionStorage extends ArrayObject{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return PermissionIterator
     */
    public function getIterator()
    {
        return new PermissionIterator($this->storage);
    }


    /**
     * Get the value of storage
     *
     * @return  Permission[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

            /**
     * Set the value of storage
     *
     * @param  \Identimo\Permission[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}
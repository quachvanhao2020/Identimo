<?php
namespace Identimo\Storage;
use YPHP\ArrayObject;
use Identimo\Storage\Iterator\PermissionCodeIterator;
use Identimo\PermissionCode;
use YPHP\Storage\EntityStorageInterface;

class PermissionCodeStorage extends ArrayObject implements EntityStorageInterface{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return PermissionCodeIterator
     */
    public function getIterator()
    {
        return new PermissionCodeIterator($this->storage);
    }


    /**
     * Get the value of storage
     *
     * @return  PermissionCode[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

            /**
     * Set the value of storage
     *
     * @param  \Identimo\PermissionCode[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}
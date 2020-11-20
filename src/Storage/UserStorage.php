<?php
namespace Identimo\Storage;

use YPHP\ArrayObject;
use Identimo\Storage\Iterator\UserIterator;
use Identimo\User;
use YPHP\Storage\EntityStorage;

class UserStorage extends EntityStorage{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return UserIterator
     */
    public function getIterator()
    {
        return new UserIterator($this->storage);
    }


    /**
     * Get the value of storage
     *
     * @return  User[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

            /**
     * Set the value of storage
     *
     * @param  \Identimo\User[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}
<?php
namespace Societymo\Storage;

use YPHP\ArrayObject;
use Identimo\Storage\Iterator\UserIterator;
use Identimo\User;

class UserStorage extends ArrayObject{

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
     * @param  User[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}
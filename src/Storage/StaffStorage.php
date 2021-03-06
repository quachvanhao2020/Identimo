<?php
namespace Identimo\Storage;

use Identimo\Storage\Iterator\StaffIterator;
use Identimo\Staff;

class StaffStorage extends UserStorage{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return StaffIterator
     */
    public function getIterator()
    {
        return new StaffIterator($this->storage);
    }


    /**
     * Get the value of storage
     *
     * @return  Staff[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

            /**
     * Set the value of storage
     *
     * @param  \Identimo\Staff[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}
<?php
namespace Identimo;

use YPHP\Entity;
use YPHP\EntityFertility;
use Identimo\Storage\PermissionStorage;
use Identimo\Storage\PermissionCodeStorage;

class Permission extends EntityFertility{

    const CODES = "codes";
    public function __toArray(){
        return array_merge([
            self::CODES => $this->getCodes(),
        ],parent::__toArray());
    }
    /**
     * @var PermissionCodeStorage
     */
    protected $codes;

        /**
     * Get the value of parent
     *
     * @return  Permission
     */ 
    public function getParent()
    {
        if(!$this->parent) $this->parent = new Permission();
        return $this->parent;
    }

    /**
     * Get the value of childrens
     *
     * @return  PermissionStorage
     */ 
    public function getChildrens()
    {
        if(!$this->childrens) $this->childrens = new PermissionStorage();
        return $this->childrens;
    }

    /**
     * Get the value of codes
     *
     * @return  PermissionCodeStorage
     */ 
    public function getCodes()
    {
        if(!$this->codes) $this->codes = new PermissionCodeStorage();

        return $this->codes;
    }

    /**
     * Set the value of codes
     *
     * @param  PermissionCodeStorage  $codes
     *
     * @return  self
     */ 
    public function setCodes(PermissionCodeStorage $codes = null)
    {
        $this->codes = $codes;

        return $this;
    }
}
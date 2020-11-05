<?php
namespace Identimo;
use YPHP\Entity;
use Laminas\Permissions\Rbac\RoleInterface;

class Guest extends User{
    /**
     * Get the value of aclRole
     *
     * @return  RoleInterface
     */ 
    public function getAclRole()
    {
        if(!$this->aclRole instanceof RoleInterface) $this->aclRole = new Acl\Role\Guest();
        return $this->aclRole;
    }
}
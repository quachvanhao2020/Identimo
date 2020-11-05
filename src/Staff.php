<?php
namespace Identimo;
use Laminas\Permissions\Acl\Role\RoleInterface;

class Staff extends User{
    /**
     * Get the value of aclRole
     *
     * @return  RoleInterface
     */ 
    public function getAclRole()
    {
        if(!$this->aclRole instanceof RoleInterface) $this->aclRole = new Acl\Role\Staff();
        return $this->aclRole;
    }
}
<?php
namespace Identimo;
use Laminas\Permissions\Acl\Role\RoleInterface;

class Admin extends Staff{
    /**
     * Get the value of aclRole
     *
     * @return  RoleInterface
     */ 
    public function getAclRole()
    {
        if(!$this->aclRole instanceof RoleInterface) $this->aclRole = new Acl\Role\Admin();

        return $this->aclRole;
    }
}
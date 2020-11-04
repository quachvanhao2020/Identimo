<?php
namespace Identimo\Acl\Role;
use Laminas\Permissions\Acl\Role\GenericRole as Role;

class User extends Role{

    /**
     * Sets the Role identifier
     *
     * @param string $roleId
     */
    public function __construct()
    {
        $this->roleId = "User";
    }
}
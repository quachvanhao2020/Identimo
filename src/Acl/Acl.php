<?php
namespace Identimo\Acl;

use Laminas\Permissions\Acl\Acl as AclAcl;
use Identimo\Acl\Resource;
use Identimo\Acl\Role\Guest;
use Identimo\Acl\Role\Staff;
use Identimo\Acl\Role\User;
use Identimo\UserInterface;

class Acl extends AclAcl{

    private static $instance = null;

    /**
     * @return self
     */
    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __construct()
    {
        foreach ($this->raiseResources() as $key => $value) {
            $this->addResource($value);
        }
        foreach ($this->raiseRole() as $key => $value) {
            $this->addRole($value);
        }
    }

    public function updateByUser(UserInterface $user){
        foreach ($user->getPermissions() as $value) {
            $this->allow($user->getAclRole(), $value->getCode());
        }
    }

    public function raiseRole(){
        return [
            new Guest,
            new Staff,
            new User
        ];
    }

    public function raiseResources(){
        return [
            new Resource\MANAGE_STAFF,
            new Resource\MANAGE_USERS,
            new Resource\MANAGE_GUEST,
        ];
    }

}
<?php
namespace Identimo\Acl;

use Laminas\Permissions\Acl\Acl as AclAcl;
use Identimo\UserInterface;

class Acl extends AclAcl{

    public static $ROLES = [];

    public static $RESOURCES = [];

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
        $this->init();
    }

    public function init(){
        foreach (self::$ROLES as $key => $value) {
            $this->addRole($value);
        }
        foreach ($this::$RESOURCES as $key => $value) {
            $this->addResource($value);
        }
    }

    public function updateByUser(UserInterface $user){
        foreach ($user->getPermission()->getCodes() as $key => $value) {
            $this->allow($user->getAclRole(), $value->getCode());
        }
    }
}
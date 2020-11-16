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
            $this->addResource($value);
        }
        foreach ($this::$RESOURCES as $key => $value) {
            $this->addRole($value);
        }
    }

    public function updateByUser(UserInterface $user){
        foreach ($user->getPermissions() as $value) {
            foreach ($value->getCodes() as $_key => $_value) {
                $this->allow($user->getAclRole(), $_value->getCode());
            }
        }
    }

}
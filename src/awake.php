<?php
namespace Identimo;
use Identimo\Acl\Acl;
use Identimo\Acl\Resource;
use Identimo\Acl\Role\Guest;
use Identimo\Acl\Role;
if(!defined("PERMISSION_CAPTURE_START")){
    define("PERMISSION_CAPTURE_START","PERMISSION_CAPTURE_START");
}
if(!defined("PERMISSION_CAPTURE_END")){
    define("PERMISSION_CAPTURE_END","PERMISSION_CAPTURE_END");
}

Acl::$ROLES += [
    new Role\Guest,
    new Role\Staff,
    new Role\User,
    new Role\Admin,
];
Acl::$RESOURCES += [
    new Resource\MANAGE_STAFF,
    new Resource\MANAGE_USER,
    new Resource\MANAGE_GUEST,
    new Resource\MANAGE_ADMIN,
]; 
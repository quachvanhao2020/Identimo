<?php
namespace Identimo;
use Identimo\Acl\Acl;
use Identimo\Acl\Resource;
use Identimo\Acl\Role\Guest;

Acl::$ROLES += [
    new Guest,
    new Staff,
    new User,
    new Admin,
];
Acl::$RESOURCES += [
    new Resource\MANAGE_STAFF,
    new Resource\MANAGE_USERS,
    new Resource\MANAGE_GUEST,
]; 
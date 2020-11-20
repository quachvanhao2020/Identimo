<?php
use Identimo\Acl\Acl;
use Identimo\Admin;
use Identimo\Permission;
use Identimo\PermissionCode;
use Identimo\PermissionEnum;
use Identimo\Storage\PermissionCodeStorage;

require_once "vendor/autoload.php";

$array = [
    PERMISSION_CAPTURE_START => [
        PermissionEnum::MANAGE_STAFF,
        PermissionEnum::MANAGE_ADMIN
    ],
    "a" => "b",
    "c" => "c",
    PERMISSION_CAPTURE_END => true,
    "e" => [
        PERMISSION_CAPTURE_START => [
            PermissionEnum::MANAGE_STAFF,
            PermissionEnum::MANAGE_ADMIN
        ],
        "a" => "b",
        "c" => "c",
        PERMISSION_CAPTURE_END => true,
    ],
    "x" => "x",
    PERMISSION_CAPTURE_START => [
        //PermissionEnum::MANAGE_STAFF,
        PermissionEnum::MANAGE_ADMIN
    ],
    "h" => "h",
    "l" => "l",
    PERMISSION_CAPTURE_END => true,
];
$admin = new Admin;
$admin->setPermission((new Permission())->setCodes(new PermissionCodeStorage([
    (new PermissionCode())->setCode(PermissionEnum::MANAGE_STAFF),
    //(new PermissionCode())->setCode(PermissionEnum::MANAGE_ADMIN),
])));

Acl::getInstance()->updateByUser($admin);
PermissionGuardArray($array,$admin->getAclRole());
var_dump($array);
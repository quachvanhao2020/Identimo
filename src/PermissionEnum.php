<?php
namespace Identimo;
use YPHP\Enum;

abstract class PermissionEnum extends Enum{
    const MANAGE_USER = "MANAGE_USER";
    const MANAGE_STAFF = "MANAGE_STAFF";
    const MANAGE_ADMIN = "MANAGE_ADMIN";
    const MANAGE_PERMISSION = "MANAGE_PERMISSION";
}
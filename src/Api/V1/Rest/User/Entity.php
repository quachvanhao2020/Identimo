<?php
namespace Identimo\Api\V1\Rest\User;
use Identimo\User;

class _Entity extends User{

}

class_alias(User::class, "Identimo\Api\V1\Rest\User\Entity");
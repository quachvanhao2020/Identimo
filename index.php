<?php
require_once "vendor/autoload.php";
require_once "config/bootstrap.php";
use Identimo\Acl\Acl;
use Identimo\Acl\AclRole;
use Identimo\User;
use Identimo\Admin;
use Identimo\Staff;
use Identimo\BaseUser;
use Identimo\Permission;
use Identimo\PermissionCode;
use Identimo\PermissionEnum;
use Identimo\Storage\PermissionCodeStorage;
use YPHP\Model\Media\Image;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\ArrayCollectionx;

$user = new Staff();
$user1 = new Admin();
$user1->setEmail("email");
$user1->setUsername("kiet");
$user1->setPassword("kiet");
$user1->admin = "kiet";
$user1->staff = "kiet";

$user->setEmail("email");
$user->setUsername("hao");
$user->setPassword("hao");
$image = new Image();
$image->setSrc("432");
$user->setAvatar($image);
$user->admin = "hihi";
$user->staff = "haha";
$user->setParent($user1);

$permission = new Permission();
$codes = new ArrayCollection([
    (new PermissionCode())->setCode('hihi'),
]);

//var_dump((array)$codes);var_dump((array)new ArrayCollection());

$permission->setCodes($codes);
$user->setPermission($permission);

//return;


//var_dump($user);


//$user->setAvatar($avatar);

//return;
$entityManager->persist($user);
$entityManager->flush();

$article = $entityManager->find(Staff::class, $user->getId());
$avatar = ($article->getAvatar());
//var_dump($article);

return;

$image = new Image("43242");
var_dump($image);
$entityManager->persist($image);
$entityManager->flush();
return;
var_dump("Your new Bug Id: ".$user->getId()."\n");
<?php
namespace Identimo\Acl;
use Laminas\Permissions\Acl\Role\GenericRole;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="acl_roles")
 */
class AclRole extends GenericRole{

    /**
     * Unique id of Role
     * @ORM\Id
     * @ORM\Column(type="string")
     * @var string
     */
    protected $roleId;
}
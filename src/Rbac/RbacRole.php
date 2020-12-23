<?php
namespace Identimo\Rbac;
use Laminas\Permissions\Rbac\Role;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="rbac_roles")
 */
class RbacRole extends Role{

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @ORM\GeneratedValue
     * @var string
     */
    protected $name;
}
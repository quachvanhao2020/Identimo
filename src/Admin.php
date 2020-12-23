<?php
namespace Identimo;
use Laminas\Permissions\Acl\Role\RoleInterface;
use Doctrine\ORM\Mapping as ORM;
use YPHP\Model\Media\Image;

/**
 * @ORM\Entity 
 * @ORM\AssociationOverrides({
 *      @ORM\AssociationOverride(name="avatar",
 *          joinColumns=@ORM\JoinColumn(
 *              name="admin_id",
 *              referencedColumnName="id"
 *          )
 *      )
 * })
 * @ORM\Table(name="admins")
 */
class Admin extends Staff{

    /**
     * 
     * @ORM\Column(type="string",name="admin")
     * @var string
     */
    public $admin;
    /**
     * Get the value of aclRole
     *
     * @return  RoleInterface
     */ 
    public function getAclRole()
    {
        if(!$this->aclRole instanceof RoleInterface) $this->aclRole = new Acl\Role\Admin();

        return $this->aclRole;
    }

}
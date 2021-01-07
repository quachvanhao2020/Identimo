<?php
namespace Identimo;

use Doctrine\ORM\Mapping as ORM;
use YPHP\EntityFertility;
use YPHP\Model\Stream\Image;
use Laminas\Permissions\Acl\Role\RoleInterface;
use Laminas\Permissions\Rbac\RoleInterface as RbacRoleInterface;
use Identimo\Permission;

/**
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED") 
 * @ORM\InheritanceType("SINGLE_TABLE") 
 * /@ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "admin" = "Admin","staff" = "Staff"})
 * @ORM\Table(name="users")
 */
class User extends EntityFertility implements UserInterface{

    /**
     * 
     * @ORM\Id
     * @ORM\Column(type="string",name="id")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Doctrine\ORM\Id\UuidGenerator")
     * @var string
     */
    protected $id;

    const EMAIL = "email";
    const PHONE = "phone";
    const USERNAME = "username";
    const PASSWORD = "password";
    const AVATAR = "avatar";
    const PERMISSION = "permission";
    const ACLROLE = "aclRole";
    const RBACROLE = "rbacRole";

    public function __toArray() {
        return array_merge([
            self::USERNAME => $this->getUsername(),
            self::PASSWORD => $this->getPassword(),
            self::EMAIL => $this->getEmail(),
            self::PHONE => $this->getPhone(),
            self::AVATAR => $this->getAvatar(),
            self::PERMISSION => $this->getPermission(),
            self::ACLROLE => $this->getAclRole(),
            self::RBACROLE => $this->getRbacRole(),
        ],parent::__toArray());
    }


    /**
     * Many Categories have One Category.
     * @ORM\ManyToOne(targetEntity="Identimo\User", inversedBy="children",cascade={"persist"})
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    protected $parent;

    /**
     * One Category has Many Categories.
     * @ORM\OneToMany(targetEntity="Identimo\User", mappedBy="parent")
     */
    protected $children;
    
    /**
     * 
     * @ORM\Column(type="string",nullable=true)
     * /@Assert\Email
     * /@Assert\NotEmpty
     * @var string
     */
    protected $email;
    
    /**
     * 
     * @ORM\Column(type="string",nullable=true,options={"unsigned":true, "default":"phone"})
     * @var string
     */
    protected $phone;
    
    /**
     * 
     * @ORM\Column(type="string")
     * @var string
     */
    protected $username;
    
    /**
     * 
     * @ORM\Column(type="string")
     * @var string
     */
    protected $password;

    /**
     * 
     * \@ORM\ManyToOne(targetEntity="YPHP\Model\Stream\Image",cascade={"persist"})
     * @var Image
     */
    protected $avatar;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Identimo\Permission",cascade={"persist"})
     * @var Permission
     */
    protected $permission;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Identimo\Acl\AclRole")
     * @ORM\JoinColumn(name="acl_role_id", referencedColumnName="roleId")
     * @var RoleInterface
     */
    protected $aclRole;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Identimo\Rbac\RbacRole")
     * @ORM\JoinColumn(name="rbac_role_id", referencedColumnName="name")
     * @var RbacRoleInterface
     */
    protected $rbacRole;

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        if(!$this->email) $this->email = "";
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of phone
     *
     * @return  string
     */ 
    public function getPhone()
    {
        if(!$this->phone) $this->phone = "";
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @param  string  $phone
     *
     * @return  self
     */ 
    public function setPhone(string $phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of username
     *
     * @return  string
     */ 
    public function getUsername()
    {
        if(!$this->username) $this->username = "d";
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @param  string  $username
     *
     * @return  self
     */ 
    public function setUsername(string $username = null)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return  string
     */ 
    public function getPassword()
    {
        if(!$this->password) $this->password = "";
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param  string  $password
     *
     * @return  self
     */ 
    public function setPassword(string $password = null)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of avatar
     *
     * @return  YPHP\Model\Stream\Image
     */ 
    public function getAvatar()
    {
        if(!$this->avatar) $this->avatar = new Image();
        return $this->avatar;
    }

    /**
     * Set the value of avatar
     *
     * @param  Image  $avatar
     *
     * @return  self
     */ 
    public function setAvatar(Image $avatar = null)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get the value of aclRole
     *
     * @return  RoleInterface
     */ 
    public function getAclRole()
    {
        return $this->aclRole;
    }

    /**
     * Set the value of aclRole
     *
     * @param  RoleInterface  $aclRole
     *
     * @return  self
     */ 
    public function setAclRole(RoleInterface $aclRole = null)
    {
        $this->aclRole = $aclRole;

        return $this;
    }

    /**
     * Get the value of rbacRole
     *
     * @return  RbacRoleInterface
     */ 
    public function getRbacRole()
    {
        return $this->rbacRole;
    }

    /**
     * Set the value of rbacRole
     *
     * @param  RbacRoleInterface  $rbacRole
     *
     * @return  self
     */ 
    public function setRbacRole(RbacRoleInterface $rbacRole = null)
    {
        $this->rbacRole = $rbacRole;

        return $this;
    }

    /**
     * Get the value of permission
     *
     * @return  Permission
     */ 
    public function getPermission()
    {
        //if(!$this->permission) $this->permission = new Permission();
        return $this->permission;
    }

    /**
     * Set the value of permission
     *
     * @param  Permission  $permission
     *
     * @return  self
     */ 
    public function setPermission(Permission $permission = null)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get one Category has Many Categories.
     */ 
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set one Category has Many Categories.
     *
     * @return  self
     */ 
    public function setChildren($children)
    {
        $this->children = $children;

        return $this;
    }
}
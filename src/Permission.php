<?php
namespace Identimo;

use YPHP\EntityFertility;
use Identimo\Storage\PermissionStorage;
use Identimo\Storage\PermissionCodeStorage;
use Doctrine\ORM\Mapping as ORM;
use Identimo\PermissionCode;

/**
 * @ORM\Entity 
 * @ORM\Table(name="permissions")
 */
class Permission extends EntityFertility{
    const CODES = "codes";

    public function __toArray(){
        return array_merge([
            self::CODES => $this->getCodes(),
        ],parent::__toArray());
    }

    /**
     * 
     * @ORM\Id
     * @ORM\Column(type="string",name="id")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Doctrine\ORM\Id\UuidGenerator")
     * @var string
     */
    protected $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="PermissionCode",cascade={"persist"})
     * @var PermissionCodeStorage
     */
    protected $codes;

    /**
     * Many Categories have One Category.
     * @ORM\ManyToOne(targetEntity="Identimo\Permission", inversedBy="children",cascade={"persist"})
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    protected $parent;

    /**
     * One Category has Many Categories.
     * @ORM\OneToMany(targetEntity="Identimo\Permission", mappedBy="parent")
     */
    protected $children;

        /**
     * Get the value of parent
     *
     * @return  Permission
     */ 
    public function getParent()
    {
        //if(!$this->parent) $this->parent = new Permission();
        return $this->parent;
    }

    /**
     * Get the value of childrens
     *
     * @return  PermissionStorage
     */ 
    public function getChildrens()
    {
        if(!$this->childrens) $this->childrens = new PermissionStorage();
        return $this->childrens;
    }

    /**
     * Get the value of codes
     *
     * @return  PermissionCodeStorage
     */ 
    public function getCodes()
    {
        if(!$this->codes) $this->codes = new PermissionCodeStorage();
        return $this->codes;
    }

    /**
     * Set the value of codes
     *
     * @param  PermissionCodeStorage  $codes
     *
     * @return  self
     */ 
    public function setCodes( $codes = null)
    {
        $this->codes = $codes;
        return $this;
    }

    public function __toString()
    {
        return $this->id;
    }
}
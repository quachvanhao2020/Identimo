<?php
namespace Identimo;
use YPHP\EntityLife;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="permission_codes")
 */
class PermissionCode extends EntityLife{
    const CODE = "code";

    public function __toArray() {
        return array_merge(parent::__toArray(),[
            self::CODE => $this->getCode(),
        ]);
    }
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $code;

    /**
     * Get the value of code
     *
     * @return  string
     */ 
    public function getCode()
    {
        if(!$this->code) $this->code = "d";
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @param  string  $code
     *
     * @return  self
     */ 
    public function setCode(string $code = null)
    {
        $this->code = $code;

        return $this;
    }
}
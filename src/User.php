<?php
namespace Identimo;

use YPHP\EntityFertility;
use YPHP\Model\Media\Image;
use Identimo\Storage\PermissionStorage;

class User extends EntityFertility implements UserInterface{

    const EMAIL = "email";
    const PHONE = "phone";
    const USERNAME = "username";
    const PASSWORD = "password";
    const AVATAR = "avatar";
    const PERMISSIONS = "permissions";

    public function __toArray() {
        return array_merge([
            self::USERNAME => $this->getUsername(),
            self::PASSWORD => $this->getPassword(),
            self::EMAIL => $this->getEmail(),
            self::PHONE => $this->getPhone(),
            self::AVATAR => $this->getAvatar(),
            self::PERMISSIONS => $this->getPermissions(),
        ],parent::__toArray());
    }


    /**
     * 
     *
     * @var string
     */
    protected $email;
            /**
     * 
     *
     * @var string
     */
    protected $phone;
            /**
     * 
     *
     * @var string
     */
    protected $username;
            /**
     * 
     *
     * @var string
     */
    protected $password;

    /**
     * 
     *
     * @var Image
     */
    protected $avatar;

    /**
     * 
     *
     * @var PermissionStorage
     */
    protected $permissions;

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
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
     * Get the value of permissions
     *
     * @return  PermissionStorage
     */ 
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Set the value of permissions
     *
     * @param  PermissionStorage  $permissions
     *
     * @return  self
     */ 
    public function setPermissions(PermissionStorage $permissions = null)
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * Get the value of avatar
     *
     * @return  Image
     */ 
    public function getAvatar()
    {
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
}
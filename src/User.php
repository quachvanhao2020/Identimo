<?php
namespace Identimo;

use YPHP\EntityFertility;

class User extends EntityFertility{
    const EMAIL = "email";
    const PHONE = "phone";
    const USERNAME = "username";
    const PASSWORD = "password";
    const NOTE = "note";

    public function __toArray() {
        return array_merge([
            self::USERNAME => $this->getUsername(),
            self::PASSWORD => $this->getPassword(),
            self::EMAIL => $this->getEmail(),
            self::PHONE => $this->getPhone(),
            self::NOTE => $this->getNote(),
        ],parent::__toArray());
    }

        /**
     * @var string
     */
    protected $note;

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
    public function setEmail(string $email)
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
    public function setPhone(string $phone)
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
    public function setUsername(string $username)
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
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of note
     *
     * @return  string
     */ 
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @param  string  $note
     *
     * @return  self
     */ 
    public function setNote(string $note)
    {
        $this->note = $note;

        return $this;
    }
}
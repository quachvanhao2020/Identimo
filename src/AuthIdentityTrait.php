<?php
namespace Identimo;

trait AuthIdentityTrait{
        /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

        /**
     * Get the value of username
     *
     * @return  string
     */ 
    public function getUsername()
    {
        if(!$this->username) $this->username = "";

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
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }
}
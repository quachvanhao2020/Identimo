<?php
namespace Identimo;

use Identimo\User;
use Identimo\UserFilter;
use Laminas\Authentication\Adapter\AdapterInterface;
use Laminas\Authentication\Result;
use Identimo\Factory\BaseUserFactory;
use Identimo\Factory\BaseStaffFactory;
use Identimo\Factory\BaseAdminFactory;


class AuthAdapter implements AdapterInterface{
    use AuthIdentityTrait;

        /**
     * @var string
     */
    protected $type;

    /**
     * @var mixed
     */
    protected $factorys = [];

    /**
     * Sets username and password for authentication
     *
     * @return void
     */
    public function __construct($factorys = [])
    {
        $this->factorys = $factorys;
    }

    /**
     * Performs an authentication attempt
     *
     * @return \Laminas\Authentication\Result
     * @throws \Laminas\Authentication\Adapter\Exception\ExceptionInterface
     *     If authentication cannot be performed
     */
    public function authenticate()
    {
        $user = null;
        foreach ($this->getFactorys() as $factory) {
            if($this->type){
                if($this->getType() == get_class($factory)){
                    $user = $this->findUser($factory);
                }
            }else{
                $user = $this->findUser($factory);
                if($user) break;
            }
        }
        if($user instanceof User){
            return new Result(Result::SUCCESS,$user,[]);
        }else{
            return new Result(Result::FAILURE_UNCATEGORIZED,null,[]);
        }
    }

    public function findUser(BaseUserFactory $factory){
        $users = $factory->list(0,"",0,"",new UserFilter());
        foreach ($users as $user) {
            if($user->getUsername() == $this->getUsername()){
                if($user->getPassword() == $this->getPassword()){
                    return $user;
                }
            }
        }
    }

    /**
     * Get the value of type
     *
     * @return  string
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param  string  $type
     *
     * @return  self
     */ 
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of factorys
     *
     * @return  mixed
     */ 
    public function getFactorys()
    {
        return $this->factorys;
    }

    /**
     * Set the value of factorys
     *
     * @param  mixed  $factorys
     *
     * @return  self
     */ 
    public function setFactorys($factorys)
    {
        $this->factorys = $factorys;

        return $this;
    }
}
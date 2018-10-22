<?php

namespace AppBundle\Form\Model;


use AppBundle\Entity\Company;
use AppBundle\Entity\User;

class CalendarModel
{
    /**
     * @var int
     */
    protected $clientType;

    /**
     * @var User
     */
    protected $user;

    /**
     * @return int
     */
    public function getClientType()
    {
        return $this->clientType;
    }

    /**
     * @param int $clientType
     */
    public function setClientType(int $clientType)
    {
        $this->clientType = $clientType;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    public function setUser( $user)
    {
        if($user instanceof User)
        {
            $this->user = $user;
        }
    }


}
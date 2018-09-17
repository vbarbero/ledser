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
     * @return int
     */
    public function getClientType(): int
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


}
<?php

namespace AppBundle\Form\Model;


use AppBundle\Entity\Company;
use AppBundle\Entity\User;

class CompanyFilterModel
{
    /**
     * @var int
     */
    protected $type;

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: trading
 * Date: 5/02/18
 * Time: 1:47
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Contact
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Proposal",cascade={"remove"}, mappedBy="user")
     */
    protected $proposal;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $name;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return Contact
     */
    public function getProposal(): Contact
    {
        return $this->proposal;
    }

    /**
     * @param Contact $proposal
     */
    public function setProposal(Contact $proposal)
    {
        $this->proposal = $proposal;
    }


}
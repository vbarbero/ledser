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

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
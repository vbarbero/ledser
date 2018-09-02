<?php

namespace AppBundle\Traits;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\DependencyInjection\ContainerAwareTrait as SymfonyContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @author    Aarón Nieves <alpha@pulsarcode.com>
 * @copyright Parclick S.L.
 */
trait ContainerAwareTrait
{
    use SymfonyContainerAwareTrait;

    /**
     * @param string $id
     *
     * @return object
     */
    protected function get($id)
    {
        return $this->getContainer()->get($id);
    }

    /**
     * @return ContainerInterface
     */
    protected function getContainer()
    {
        return $this->container;
    }

    /**
     * @return Registry
     */
    protected function getDoctrine()
    {
        return $this->getContainer()->get('doctrine');
    }

    /**
     * @param null|string $name
     *
     * @return EntityManager|object
     */
    protected function getManager($name = null)
    {
        return $this->getDoctrine()->getManager($name);
    }

    /**
     * @param string $parameter
     *
     * @return mixed
     */
    protected function getParameter($parameter)
    {
        return $this->getContainer()->getParameter($parameter);
    }

    /**
     * @param string $class
     *
     * @return EntityRepository
     */
    protected function getRepository($class)
    {
        return $this->getManager()->getRepository($class);
    }
}

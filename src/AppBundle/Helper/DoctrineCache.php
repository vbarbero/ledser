<?php

namespace AppBundle\Helper;

use Doctrine\Common\Util\ClassUtils;
use Doctrine\ORM\EntityManager;
use JMS\DiExtraBundle\Annotation as DI;
use AppBundle\Entity\BaseEntity;

/**
 * @DI\Service("app.helper.doctrine_cache")
 *
 * @author    Aarón Nieves <alpha@pulsarcode.com>
 * @copyright Parclick S.L.
 */
class DoctrineCache
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @DI\InjectParams({"em": @DI\Inject("doctrine.orm.entity_manager")})
     *
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @param mixed $cacheData
     * @param bool  $root
     *
     * @return mixed
     */
    public function compact($cacheData, $root = true)
    {
        if (is_array($cacheData))
        {
            foreach ($cacheData as $index => $data)
            {
                if ($data instanceof BaseEntity)
                {
                    $cacheData[$index] = ClassUtils::getClass($data) . ':::' . $data->getId();
                }
                elseif (is_array($data))
                {
                    if ($root)
                    {
                        $cacheData[$index] = $this->compact($data, false);
                    }
                    elseif (current($data) instanceof BaseEntity)
                    {
                        throw new \Exception('Caching of array with sub-array of Entities is not allowed');
                    }
                }
            }
        }

        return $cacheData;
    }

    /**
     * @param mixed $cacheData
     * @param bool  $root
     *
     * @return mixed
     */
    public function extract($cacheData, $root = true)
    {
        if (is_array($cacheData))
        {
            foreach ($cacheData as $index => $data)
            {
                if (is_string($data) && mb_strpos($data, ':::'))
                {
                    list($class, $id)  = explode(':::', $data);

                    if (class_exists($class) && intval($id))
                    {
                        $entityRepository  = $this->em->getRepository($class);
                        $cacheData[$index] = $entityRepository->find($id);
                    }
                }
                elseif ($root && is_array($data))
                {
                    $cacheData[$index] = $this->extract($data, false);
                }
            }
        }

        return $cacheData;
    }
}

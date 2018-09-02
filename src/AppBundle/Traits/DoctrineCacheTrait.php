<?php

namespace AppBundle\Traits;

use AppBundle\Helper\DoctrineCache;

/**
 * @author    Aarón Nieves <alpha@pulsarcode.com>
 * @copyright Parclick S.L.
 */
trait DoctrineCacheTrait
{
    /**
     * @param mixed $cacheData
     *
     * @return mixed
     */
    private function extract($cacheData)
    {
        /** @var DoctrineCache $doctrineCache */
        $doctrineCache = $this->get('app.helper.doctrine_cache');

        return $doctrineCache->extract($cacheData);
    }

    /**
     * @param mixed $cacheData
     *
     * @return mixed
     */
    private function compact($cacheData)
    {
        /** @var DoctrineCache $doctrineCache */
        $doctrineCache = $this->get('app.helper.doctrine_cache');

        return $doctrineCache->compact($cacheData);
    }
}

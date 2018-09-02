<?php
/**
 * Created by PhpStorm.
 * User: trading
 * Date: 15/05/18
 * Time: 2:19
 */

namespace AppBundle\Repository;

use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Parclick\CoreBundle\Component\Cache\CacheManager;
use Parclick\CoreBundle\Helper\ClassTools;
use Parclick\CoreBundle\Traits\ContainerAwareTrait;
use Parclick\CoreBundle\Traits\DoctrineCacheTrait;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;



class BaseRepository extends EntityRepository implements ContainerAwareInterface
{
    use ContainerAwareTrait;
    use DoctrineCacheTrait;

    /**
     * @param bool $fresh
     *
     * @return bool|false|mixed|string
     */
    public function count($fresh = false)
    {
        $cacheKey = __FUNCTION__;
        $qb       = $this->createQueryBuilder('e')->select('COUNT(e.id)');

        if ($fresh)
        {
            return $qb->getQuery()->getSingleScalarResult();
        }

        return $this->getCachedSingleScalarResult($qb, $cacheKey, CacheManager::LIFETIME_ONE_DAY);
    }

    /**
     * @param int $limit
     *
     * @return array
     */
    public function getLatest($limit = 10)
    {
        return $this->findBy([], ['createdAt' => Criteria::DESC], $limit);
    }

    /**
     * @param array $entityIds
     *
     * @return array
     */
    public function getManyByIds(array $entityIds)
    {
        $result = [];

        foreach ($entityIds as $entityId)
        {
            $result[] = $this->getEntityManager()->find($this->getEntityName(), $entityId);
        }

        return $result;
    }

    /**
     * @param int $entityId
     *
     * @return array
     */
    public function getOneById($entityId)
    {
        return $this->getManyByIds([$entityId]);
    }

    /**
     * @param array $formFilters
     *
     * @throws \Exception
     */
    public function getQueryBuilderFromApiFilters(array $formFilters = [])
    {
        throw new \Exception('You should override ' . __FUNCTION__ . '() in your repository ' . get_class($this));
    }

    /**
     * @param QueryBuilder $qb
     * @param string       $entity
     * @param mixed        $value
     */
    protected function filterByEntity(QueryBuilder $qb, $entity, $value)
    {
        $rootEntity = current($qb->getRootEntities());
        $rootAlias  = current($qb->getRootAliases());

        if ($field = ClassTools::findObjectRelationField($rootEntity, $entity))
        {
            $parameter = $rootAlias . '_' . $field;

            if (ClassTools::isMeToMe($field))
            {
                $qb->andWhere($qb->expr()->eq($rootAlias . '.' . $field, ":$parameter"));
            }
            elseif (ClassTools::isManyToMany($rootEntity, $field))
            {
                $qb->andWhere($qb->expr()->isMemberOf(":$parameter", $rootAlias . '.' . $field));
            }
            elseif (ClassTools::isManyToOne($rootEntity, $field))
            {
                $qb->andWhere($qb->expr()->eq($rootAlias . '.' . $field, ":$parameter"));
            }
            elseif (ClassTools::isOneToMany($rootEntity, $field))
            {
                $qb->andWhere($qb->expr()->isMemberOf(":$parameter", $rootAlias . '.' . $field));
            }
            elseif (ClassTools::isOneToOne($rootEntity, $field))
            {
                $qb->andWhere($qb->expr()->eq($rootAlias . '.' . $field, ":$parameter"));
            }

            $qb->setParameter($parameter, $value);
        }
    }

    /**
     * @param array|string $cacheKey
     *
     * @return bool|false|mixed|string
     */
    protected function getCacheData(&$cacheKey)
    {
        $cacheManager = CacheManager::getCacheManager(CacheManager::NAMESPACE_REPOSITORIES);

        return $this->extract($cacheManager->getCacheData(CacheManager::getCacheKey($this, $cacheKey)));
    }

    /**
     * @param QueryBuilder $qb
     * @param array|string $cacheKey
     * @param null         $lifetime
     *
     * @return array|bool|false|mixed|string
     */
    protected function getCachedOneOrNullResult(QueryBuilder $qb, &$cacheKey, $lifetime = null)
    {
        return $this->_callback(__FUNCTION__, $qb, $cacheKey, $lifetime);
    }

    /**
     * @param QueryBuilder $qb
     * @param array|string $cacheKey
     * @param null         $lifetime
     *
     * @return array|bool|false|mixed|string
     */
    protected function getCachedResult(QueryBuilder $qb, &$cacheKey, $lifetime = null)
    {
        return $this->_callback(__FUNCTION__, $qb, $cacheKey, $lifetime);
    }

    /**
     * @param QueryBuilder $qb
     * @param array|string $cacheKey
     * @param null         $lifetime
     *
     * @return bool|false|mixed|string
     */
    protected function getCachedScalarResult(QueryBuilder $qb, &$cacheKey, $lifetime = null)
    {
        return $this->_callback(__FUNCTION__, $qb, $cacheKey, $lifetime);
    }

    /**
     * @param QueryBuilder $qb
     * @param array|string $cacheKey
     * @param null         $lifetime
     *
     * @return bool|false|mixed|string
     */
    protected function getCachedSingleScalarResult(QueryBuilder $qb, &$cacheKey, $lifetime = null)
    {
        return $this->_callback(__FUNCTION__, $qb, $cacheKey, $lifetime);
    }

    /**
     * @param array|string $cacheKey
     * @param mixed        $cacheData
     * @param null|int     $lifetime
     */
    protected function setCacheData(&$cacheKey, $cacheData, $lifetime = null)
    {
        $cacheManager = CacheManager::getCacheManager(CacheManager::NAMESPACE_REPOSITORIES);
        $cacheManager->setCacheData(CacheManager::getCacheKey($this, $cacheKey), $this->compact($cacheData), $lifetime);
    }

    /**
     * @param string       $callback
     * @param QueryBuilder $qb
     * @param array|string $cacheKey
     * @param null         $lifetime
     *
     * @return bool|false|mixed|string
     */
    private function _callback($callback, QueryBuilder $qb, &$cacheKey, $lifetime = null)
    {
        if (!$cacheData = $this->getCacheData($cacheKey))
        {
            $callback  = str_replace('Cached', '', $callback);
            $lifetime  = intval($lifetime) ?: CacheManager::LIFETIME_FIVE_MINUTES;
            $cacheData = $qb->getQuery()->$callback();
            $this->setCacheData($cacheKey, $cacheData, $lifetime);
        }

        return $cacheData;
    }
}
<?php namespace Larapage\Modules\ReferenceLists\Repositories\Departments;

use Larapage\System\Repositories\Core\CacheAbstractDecorator;
use Illuminate\Cache\CacheManager;

class CacheDecorator extends CacheAbstractDecorator implements DepartmentInterface
{
    protected $generalCacheKey = "departments";

    public function __construct(DepartmentInterface $repo, CacheManager $cache)
    {
        $this->repo = $repo;
        $this->cache = $cache;
    }

}

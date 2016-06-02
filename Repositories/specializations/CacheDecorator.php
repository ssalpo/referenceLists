<?php namespace Larapage\Modules\ReferenceLists\Repositories\Specializations;

use Larapage\System\Repositories\Core\CacheAbstractDecorator;
use Illuminate\Cache\CacheManager;

class CacheDecorator extends CacheAbstractDecorator implements SpecializationInterface
{
    protected $generalCacheKey = "specializations";

    public function __construct(SpecializationInterface $repo, CacheManager $cache)
    {
        $this->repo = $repo;
        $this->cache = $cache;
    }

}

<?php  namespace Larapage\ReferenceLists\Repositories\Specializations;

use Larapage\Modules\ReferenceLists\Repositories\Specializations\SpecializationInterface;
use Larapage\System\Repositories\Core\RepositoriesAbstract;

class EloquentSpecialization extends RepositoriesAbstract implements SpecializationInterface
{
    public function __construct($model)
    {
        $this->model = $model;
    }


}

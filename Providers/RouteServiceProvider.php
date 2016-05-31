<?php namespace Larapage\Modules\ReferenceLists\Providers;

use Illuminate\Routing\Router;
use Larapage\System\Providers\BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    protected function setGroupAttributes()
    {
        $this->backendGroupAttributes['namespace'] = 'Larapage\Modules\ReferenceLists\Http\Controllers';
    }

    protected function setPath()
    {
        $this->routesPath = lp_modules_path() . 'referenceLists/Http/Routes/';
    }

}

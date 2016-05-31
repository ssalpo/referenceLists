<?php namespace Larapage\Modules\ReferenceLists\Providers;

use Larapage\System\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    /**
     * Register any application authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'referenceLists');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php', 'lp.modules.public.referenceLists'
        );

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'referenceLists');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        /*
        |--------------------------------------------------------------------------
        | Top nav view composers.
        |--------------------------------------------------------------------------
        */
        $this->app->view->composer('system::_partials.topNav', 'Larapage\Modules\ReferenceLists\Composers\TopNavViewComposer');


        /*
        |--------------------------------------------------------------------------
        | Register route service provider
        |--------------------------------------------------------------------------
        */
         $this->app->register('Larapage\Modules\ReferenceLists\Providers\RouteServiceProvider');

    }


}

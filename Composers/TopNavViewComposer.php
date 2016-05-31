<?php namespace Larapage\Modules\ReferenceLists\Composers;

use Illuminate\Contracts\View\View;

class TopNavViewComposer
{
    public function compose(View $view)
    {
        $view->topNav->add('referenceLists', trans('referenceLists::global.name'), 'public', 'referenceLists.main.index');
    }
}

<?php namespace Larapage\Modules\ReferenceLists\Http\Controllers;

use Illuminate\Http\Request;
use Larapage\System\Http\Controllers\BaseController;

class ReferenceListsController extends BaseController
{
    /**
     * Display index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('referenceLists::index');
    }
}

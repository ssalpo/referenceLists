<?php namespace Larapage\Modules\ReferenceLists\Http\Controllers;

use Illuminate\Http\Request;
use Larapage\System\Modules\Settings\Http\Controllers\BaseSettingsController;

class ReferenceListsSettingController extends BaseSettingsController
{
    /**
     * Display referenceLists index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSettings()
    {
        return view('referenceLists::settings');
    }

    public function saveSettings(Request $request)
    {

    }


}

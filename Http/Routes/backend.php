<?php

// Backend routes
Route::group(['prefix' => 'referenceLists'], function(){
    Route::get('/', 'ReferenceListsController@index')->name('referenceLists.main.index');
    Route::get('/settings', 'ReferenceListsSettingController@getSettings')->name('referenceLists.settings.getSettings');
    Route::put('/settings', 'ReferenceListsSettingController@saveSettings')->name('referenceLists.settings.saveSettings');
});
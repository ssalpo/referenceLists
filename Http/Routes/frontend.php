<?php

// Frontend routes
Route::group(['prefix' => 'referenceLists'], function(){
    Route::get('/', 'ReferenceListsController@index')->name('referenceLists.index');
    Route::get('/settings', 'ReferenceListsSettingController@index')->name('referenceLists.settings.index');
    Route::put('/settings', 'ReferenceListsSettingController@update')->name('referenceLists.settings.update');
});
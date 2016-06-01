<?php

// Backend routes
Route::group(['prefix' => 'referenceLists'], function(){
    Route::get('/', 'ReferenceListsController@index')->name('referenceLists.main.index');

    // Department routes
    Route::group(['prefix' => 'departments'], function(){
        Route::get('/', 'DepartmentController@index')->name('referenceLists.departments.index');
        Route::get('/create', 'DepartmentController@create')->name('referenceLists.departments.create');
        Route::post('/store', 'DepartmentController@store')->name('referenceLists.departments.store');
        Route::get('/{id}/edit', 'DepartmentController@edit')->name('referenceLists.departments.edit');
        Route::put('/{id}/update', 'DepartmentController@update')->name('referenceLists.departments.update');
        Route::delete('/{id}/delete', 'DepartmentController@destroy')->name('referenceLists.departments.destroy');
    });
});
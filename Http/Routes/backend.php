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

    // Specializations routes
    Route::group(['prefix' => 'specializations'], function(){
        Route::get('/', 'SpecializationController@index')->name('referenceLists.specializations.index');
        Route::get('/create', 'SpecializationController@create')->name('referenceLists.specializations.create');
        Route::post('/store', 'SpecializationController@store')->name('referenceLists.specializations.store');
        Route::get('/{id}/edit', 'SpecializationController@edit')->name('referenceLists.specializations.edit');
        Route::put('/{id}/update', 'SpecializationController@update')->name('referenceLists.specializations.update');
        Route::delete('/{id}/delete', 'SpecializationController@destroy')->name('referenceLists.specializations.destroy');
    });
});
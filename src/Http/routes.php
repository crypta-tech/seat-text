<?php

Route::group([
    'namespace' => 'CryptaEve\Seat\Text\Http\Controllers',
    'middleware' => ['web', 'auth'],
    'prefix' => 'text'
], function () {
    
    Route::get('/list', [
        'as'   => 'cryptatext::text.list',
        'uses' => 'TextController@getConfigureView',
        'middleware' => 'can:text.edit'
    ]);

    Route::get('/gettextbyid/{id}', [
        'as'   => 'cryptatext::text.textbyid',
        'uses' => 'TextController@getTextByID',
        'middleware' => 'can:text.edit'
    ]);

    Route::post('/postpagenew', [
        'as'   => 'cryptatext::text.createText',
        'uses' => 'TextController@postNewPage',
        'middleware' => 'can:text.edit'
    ]);

    Route::get('/deltextbyid/{id}', [
        'as'   => 'cryptatext::text.deletePage',
        'uses' => 'TextController@deletePageById',
        'middleware' => 'can:text.edit'
    ]);

    Route::get('/about', [
        'as'   => 'cryptatext::text.about',
        'uses' => 'TextController@getAboutView',
        'middleware' => 'can:text.edit'
    ]);

    Route::get('/instructions', [
        'as'   => 'cryptatext::text.instructions',
        'uses' => 'TextController@getInstructionsView',
        'middleware' => 'can:text.edit'
    ]);
    
});

Route::group([
    'namespace' => 'CryptaEve\Seat\Text\Http\Controllers',
    // 'middleware' => ['web', 'auth'],
    'prefix' => 'public'
], function () {
    Route::get('/{url}', [
        'as'   => 'cryptatext::text.public',
        'uses' => 'TextController@getPublicText'
    ]);
});

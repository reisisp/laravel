<?php

Route::get('/', 'HomeController@index')
    ->name('home');

/**
 * Пользовательские новости&категории
 */

Route::group([
   'prefix' => '/news',
], function (){
    $controller = 'NewsController';

    Route::get('/', "{$controller}@categories")
        ->name('news');

    Route::get('/{category}', "{$controller}@categoryOne")
        ->name('category');

    Route::get('/{category}/{id}', "{$controller}@newsCard")
        ->name('newsOne')
        ->where('id', '[0-9]+');
});


/**
 * Админка новостей
 */
Route::group([
    'prefix' => 'admin/news',
    'namespace' => 'Admin',
    'as' => 'admin::news::'
], function(){
    $controller = 'NewsController';
    Route::get('/', "{$controller}@index")
        ->name('index');

    Route::get('/create', 'NewsController@create')
        ->name('create');

    Route::get('/update', 'NewsController@update')
        ->name('update');

});


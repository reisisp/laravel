<?php

/**
 * Главная страница
 */

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

/**
 * Пользовательские новости&категории
 */

Route::group([
   'prefix' => '/news',
    'as' => 'news::'
], function (){
    $controller = 'NewsController';

    Route::get('/', "{$controller}@categories")
        ->name('categories');

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
    'namespace' => 'admin',
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


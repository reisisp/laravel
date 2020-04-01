<?php

use Illuminate\Support\Facades\Route;

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
    'prefix' => 'news',
    'as' => 'news::'
], function (){
    $controller = 'NewsController';

    Route::get('/', "{$controller}@categories")
        ->name('categories');

    Route::get('/{category}', "{$controller}@categoryOne")
        ->name('category');

    Route::get('/{category}/{id}', "{$controller}@newsCard")
        ->name('newsOne');
});


Route::match(['post', 'get'], '/contacts', [
    'uses' => 'ContactsController@index',
    'as' => 'contacts'
]);


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

    Route::match(['post', 'get'], '/addNews', "{$controller}@addNews")
        ->name('addNews');

    Route::match(['post', 'get'], '/getData', "{$controller}@getData")
        ->name('getData');

    Route::get('/update', "{$controller}@update")
        ->name('update');

});

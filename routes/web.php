<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/events/{event}', 'EventsController@show')
    ->name('events.show');

Route::feeds();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:admin']], function () {

    Route::get('dashboard', [
        'uses' => 'Admin\AdminController@dashboard',
        'as' => 'admin.dashboard',     
    ]);

    Route::resource('users', 'Admin\UsersController');


    Route::get('rssfeeds', [
        'uses' => 'EventsController@index',
        'as' => 'feeds.index',     
    ]);

    Route::get('rssfeeds/create', [
        'uses' => 'EventsController@create',
        'as' => 'feeds.create',     
    ]);

    Route::post('rssfeeds/store', [
        'uses' => 'EventsController@store',
        'as' => 'feeds.store',     
    ]);

    Route::post('rssfeeds/{id}/destroy', [
        'uses' => 'EventsController@destroy',
        'as' => 'feeds.destroy',     
    ]);

    Route::get('categories', [
        'uses' => 'Admin\CategoriesController@index',
        'as' => 'admin.category.index',     
    ]);

    Route::post('categories/store', [
        'uses' => 'Admin\CategoriesController@store',
        'as' => 'admin.category.store',     
    ]);

    Route::post('categories/{id}/store', [
        'uses' => 'Admin\CategoriesController@destroy',
        'as' => 'admin.category.destroy',     
    ]);


    
});

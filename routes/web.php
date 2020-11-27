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

<<<<<<< HEAD
Route::get('/intro', 'HomeController@intro')->name('intro');


Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
  Route::get('/callback/{provider}', 'SocialController@callback');


Route::get('/google_redirect', 'SocialController@redirectToProvider');
Route::get('/google_callback', 'SocialController@handleProviderCallback');
=======


>>>>>>> 43d324ef1f119a7d6d21edf33d1cd35f2bcdf103

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:admin']], function () {

    Route::get('dashboard', [
<<<<<<< HEAD
        'uses' => 'Admin/AdminController@dashboard',
=======
        'uses' => 'Admin\AdminController@dashboard',
>>>>>>> 43d324ef1f119a7d6d21edf33d1cd35f2bcdf103
        'as' => 'admin.dashboard',     
    ]);

    Route::resource('users', 'Admin\UsersController');

<<<<<<< HEAD
    Route::get('rssfeeds', 'EventsController@index')->name('feeds.index');
    Route::get('rssfeeds', 'EventsController@index')->name('feeds.index');
=======
>>>>>>> 43d324ef1f119a7d6d21edf33d1cd35f2bcdf103

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

<<<<<<< HEAD
=======
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

>>>>>>> 43d324ef1f119a7d6d21edf33d1cd35f2bcdf103

    
});

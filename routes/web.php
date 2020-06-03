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

Route::get('/', 'Pagescontroller@index' );
Route::get('/services', 'Pagescontroller@services' );
Route::get('/about', 'Pagescontroller@about' );
Route::resource('posts', 'PostsController');

/*
Route::get('/about', function () {
    return view('pages.about');

});



Route::get('users/{id}/{name}', function ($id,$name) {
    return 'this is user ' .$name. ' num ' .$id ;

});
*/

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
    Route::resource('posts', 'PostsController');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'PostsController@approval')->name('approval');
    Route::get('/posts', 'PostsController@index')->name('home');
});
Route::resource('users', 'UsersController');

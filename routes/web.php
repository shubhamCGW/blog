<?php

use Illuminate\Support\Facades\Auth;
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


/*Auth */

Route::get('register', 'Auth\RegisterController@register')->name('register');
Route::post('register', 'Auth\RegisterController@storeUser');
Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@authenticate');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*banner */
Route::resource('banner', 'BannerController');

/*post */
Route::resource('post', 'PostController');

Route::get('post/deletedPost/{id}', 'PostController@restoreDeletedPost')->name('restoreDeletedPost');
Route::get('post/restorePost/{id}', 'PostController@deletePermanently')->name('deletePermanently');
// Route::get('post/delete','PostController@delete')->name('post.deleted');

/*category */
Route::resource('category', 'CategoryController');

/*blog */
// Route::resource('blog', 'BlogsController');
Route::get('/','BlogsController@index')->name('blog.index');
Route::get('blog/delete','BlogsController@delete')->name('blog.deleted');
Route::get('singlePost/{id}/{slug?}', 'BlogsController@single_post')->name('single_post');

/*ckeditor */
Route::get('ckeditor', 'CkeditorController@index');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

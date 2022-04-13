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

Auth::routes();

//Front end routes
Route::get('/', 'Web\PageController@index')->name('index');

Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('post/{slug}', 'Web\PageController@post')->name('post');
Route::get('category/{slug}', 'Web\PageController@category')->name('category');
Route::get('tag/{slug}', 'Web\PageController@tag')->name('tag');
Route::get('lang/{lang}', 'Web\PageController@swap')->name('lang.swap');
Route::get('about', 'Web\PageController@about')->name('about');
Route::get('felicitaciones', 'Web\PageController@certificates')->name('felicitaciones');

//Backend routes
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
Route::get('messages', 'Admin\ContactController@index')->name('messages');
Route::post('contact', 'Admin\ContactController@store');
Route::post('upload', 'Admin\PostController@upload')->name('upload'); //CKEDITOR upload images
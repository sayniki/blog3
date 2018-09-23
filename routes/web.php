<?php

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
Route::get('/','PageController@showIndex')->middleware('menu');

Route::get('contact','PageController@getContact');
Route::get('about','PageController@getAbout');
Route::get('blog','BlogController@showBlog');
Route::get('post','BlogController@getPost');
Route::put('addPost','BlogController@getBlogContent');
Route::get('edit/blog/{id}','PageController@blogEdit');

Route::put('update/blog/{id}','BlogController@blogUpdate');
Route::get('blog/delete/{id}','BlogController@destroy');

Route::get('blog/show/{id}','BlogController@showBlogContent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

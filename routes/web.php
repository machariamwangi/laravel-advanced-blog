<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
Route::get('/users/{id}',function($id){
    return 'This is users'.$id;
    });
|
*/

Route::get('/', 'pagesController@index'); 
Route::get('/about', 'pagesController@about'); 
Route::get('/services', 'pagesController@services'); 
Route::resource('posts','PostsController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

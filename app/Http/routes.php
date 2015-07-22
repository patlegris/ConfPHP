<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* --------------------------------------------------------- *\
   Route BLOG
\* --------------------------------------------------------- */
Route::get('/', 'BlogController@index');
Route::get('single/{id}/{slug?}', 'BlogController@showPost');
Route::get('tag/{id}', 'BlogController@showTag');

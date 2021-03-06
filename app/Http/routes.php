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
   Global routes
\* --------------------------------------------------------- */
Route::get('/', 'BlogController@index');
Route::get('conference/{id}/{slug?}', 'BlogController@showPost');
Route::get('tag/{id}', 'BlogController@showTag');
Route::get('about', 'BlogController@about');
Route::get('contact', 'BlogController@contact');
Route::get('term', 'BlogController@mentions');
Route::put('dashboard/{id}/change-status', 'PostController@statusChange');
Route::put('dashboard/{id}/destroy', 'PostController@destroy');

/* --------------------------------------------------------- *\
   Auth routes
\* --------------------------------------------------------- */
//Route::get('login', 'Auth\AuthController@getLogin');
//Route::post('login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/* --------------------------------------------------------- *\
   Dashboard routes
\* --------------------------------------------------------- */
//Route::get('dashboard', 'DashboardController');

/* --------------------------------------------------------- *\
   Resource routes
\* --------------------------------------------------------- */
Route::resource('post', 'PostController');
Route::resource('dashboard', 'PostController');
Route::resource('create', 'PostController@create');
Route::resource('comment', 'CommentController');

/* --------------------------------------------------------- *\
   Other specific routes
\* --------------------------------------------------------- */
//Route::put('conference/{id}/status', 'PostController@updateStatus');
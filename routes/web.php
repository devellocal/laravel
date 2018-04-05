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
| Fresh Routes 1.0
+--------+----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
| Domain | Method   | URI                    | Name             | Action                                                                 | Middleware   |
+--------+----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
|        | GET|HEAD | /                      |                  | Closure                                                                | web          |
|        | GET|HEAD | api/user               |                  | Closure                                                                | api,auth:api |
|        | GET|HEAD | home                   | home             | App\Http\Controllers\HomeController@index                              | web,auth     |
|        | GET|HEAD | login                  | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest    |
|        | POST     | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web,guest    |
|        | POST     | logout                 | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web          |
|        | POST     | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest    |
|        | GET|HEAD | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest    |
|        | POST     | password/reset         |                  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest    |
|        | GET|HEAD | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest    |
|        | GET|HEAD | register               | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest    |
|        | POST     | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web,guest    |
+--------+----------+------------------------+------------------+------------------------------------------------------------------------+--------------+

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dash', 'HomeController@index')->name('home');


// Adding Routs +++

Route::get('/dash', 'DashControl@index');

// Resource Group
Route::resource('file', 'FilesControl');
Route::resource('album', 'AlbumsControl');
Route::resource('photo', 'PhotosControl');

/*
| Routes 2.0
+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
| Domain | Method    | URI                    | Name             | Action                                                                 | Middleware   |
+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
|        | GET|HEAD  | /                      |                  | Closure                                                                | web          |
|        | GET|HEAD  | album                  | album.index      | App\Http\Controllers\AlbumsControl@index                               | web          |
|        | POST      | album                  | album.store      | App\Http\Controllers\AlbumsControl@store                               | web          |
|        | GET|HEAD  | album/create           | album.create     | App\Http\Controllers\AlbumsControl@create                              | web          |
|        | DELETE    | album/{album}          | album.destroy    | App\Http\Controllers\AlbumsControl@destroy                             | web          |
|        | PUT|PATCH | album/{album}          | album.update     | App\Http\Controllers\AlbumsControl@update                              | web          |
|        | GET|HEAD  | album/{album}          | album.show       | App\Http\Controllers\AlbumsControl@show                                | web          |
|        | GET|HEAD  | album/{album}/edit     | album.edit       | App\Http\Controllers\AlbumsControl@edit                                | web          |
|        | GET|HEAD  | api/user               |                  | Closure                                                                | api,auth:api |
|        | GET|HEAD  | dash                   |                  | App\Http\Controllers\DashControl@index                                 | web          |
|        | GET|HEAD  | file                   | file.index       | App\Http\Controllers\FilesControl@index                                | web          |
|        | POST      | file                   | file.store       | App\Http\Controllers\FilesControl@store                                | web          |
|        | GET|HEAD  | file/create            | file.create      | App\Http\Controllers\FilesControl@create                               | web          |
|        | GET|HEAD  | file/{file}            | file.show        | App\Http\Controllers\FilesControl@show                                 | web          |
|        | DELETE    | file/{file}            | file.destroy     | App\Http\Controllers\FilesControl@destroy                              | web          |
|        | PUT|PATCH | file/{file}            | file.update      | App\Http\Controllers\FilesControl@update                               | web          |
|        | GET|HEAD  | file/{file}/edit       | file.edit        | App\Http\Controllers\FilesControl@edit                                 | web          |
|        | GET|HEAD  | home                   | home             | App\Http\Controllers\HomeController@index                              | web,auth     |
|        | GET|HEAD  | login                  | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest    |
|        | POST      | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web,guest    |
|        | POST      | logout                 | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web          |
|        | POST      | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest    |
|        | GET|HEAD  | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest    |
|        | POST      | password/reset         |                  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest    |
|        | GET|HEAD  | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest    |
|        | GET|HEAD  | photo                  | photo.index      | App\Http\Controllers\PhotosControl@index                               | web          |
|        | POST      | photo                  | photo.store      | App\Http\Controllers\PhotosControl@store                               | web          |
|        | GET|HEAD  | photo/create           | photo.create     | App\Http\Controllers\PhotosControl@create                              | web          |
|        | GET|HEAD  | photo/{photo}          | photo.show       | App\Http\Controllers\PhotosControl@show                                | web          |
|        | PUT|PATCH | photo/{photo}          | photo.update     | App\Http\Controllers\PhotosControl@update                              | web          |
|        | DELETE    | photo/{photo}          | photo.destroy    | App\Http\Controllers\PhotosControl@destroy                             | web          |
|        | GET|HEAD  | photo/{photo}/edit     | photo.edit       | App\Http\Controllers\PhotosControl@edit                                | web          |
|        | POST      | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web,guest    |
|        | GET|HEAD  | register               | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest    |
+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
|
*/
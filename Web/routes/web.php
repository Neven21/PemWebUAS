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

Route::get('/login', 'LoginController@index');

Route::get('/logout', 'LoginController@logout');

Route::get('/register', 'RegisterController@index');

Route::get('/adminhome', 'AdminController@index');

Route::post('/register', 'RegisterController@store');

Route::post('/login', 'LoginController@checkLogin');      

Route::get('/userprofile', 'UserProfileController@index');  

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/{product}','AdminController@show');

Route::get('/editprofile','UserProfileController@editindex');

Route::post('/editprofile', 'UserProfileController@edit');

Route::get('/editproduct/{product}','AdminController@editindex');

Route::post('/editproduct','AdminController@update');

Route::get('/addproduct','AdminController@createindex');

Route::post('/addproduct','AdminController@store');

Route::get('/deleteproduct/{product}','AdminController@destroy');

Route::get('/userhome','UserController@index');

Route::get('/productlist','UserController@orderindex');

Route::get('/productdetail/{product}','UserController@productdetail');

Route::post('/addtocart','UserController@addtocart');

Route::get('/shoppingcart','UserController@showcart');

Route::get('/deletecart/{cart}','UserController@destroycart');



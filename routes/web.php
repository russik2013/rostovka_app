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

Route::get('/', function () {
    return view('main_page.main');
});
Route::get('/login', 'HomeController@login');
Route::post('/login', 'HomeController@auth');


Route::get('/register', 'HomeController@registerIndex');
Route::post('/register', 'HomeController@register');



Route::get('/category', function () {
    return view('category_page.category');
});


Route::get('/product', 'ProductController@create');
Route::post('/product','ProductController@add');

//return view('login_register.login');

//return view('login_register.register');
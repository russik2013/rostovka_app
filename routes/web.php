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



Route::get('/parsing', 'Parsing\ParsingController@index');

//////////////////////////////////////////////////////////////////////////////
Route::get('/', function () {
    return view('user.main_page.main');
});
Route::get('/login', 'HomeController@login');
Route::post('/login', 'HomeController@auth');


Route::get('/register', 'HomeController@registerIndex');
Route::post('/register', 'HomeController@register');



//Route::get('{id}/category', function () {
//    return view('user.category_page.category');
//});
//===================================================================================
Route::get('{id}/category','CategoryController@show');
Route::get('{id}/product/{number?}', 'ProductController@show');

//===================================================================================

Route::get('/checkout', function () {
    return view('user.billing.checkout');
});
Route::post('/checkout', 'SaleController@makeOrder');

Route::get('/testTopSales','SaleController@getTopSales');


//Route::get('/product_inner', function () {
//    return view('user.product.product_inner');
//});

Route::get('/cart', function () {
    return view('user.cart.cart');
})->name('cart');

Route::get('/admin_index', function () {
    return view('admin.main');
});

Route::get('/user_edit', function () {
    return view('admin.user_edit.edit');
});

Route::get('/products', function () {
    return view('admin.product.products');
});

Route::get('/product_add', function () {
    return view('admin.product.pdoructadd');
});

Route::get('/product_edit', function () {
    return view('admin.product.productedit');
});

Route::get('/filters_page', function () {
    return view('admin.filters');
});

Route::get('/orders', function () {
    return view('admin.product.orders');
});

Route::get('/orderInfo', function () {
    return view('admin.product.orderInfo');
});

Route::get('/options', function () {
    return view('admin.product.options');
});

Route::get('/personal', function () {
    return view('admin.user_edit.admin_edit');
});

Route::get('/suppliers', function () {
    return view('admin.product.suppliers');
});

Route::get('/userinfo', function () {
    return view('user.userinfo');
});

Route::get('/product', 'ProductController@create');
Route::post('/product','ProductController@add');



Route::get('/csvLoad','Admin\CSV\CsvLoadController@index');
Route::post('/csvLoad','Admin\CSV\CsvLoadController@csvShoesLoad') -> name('load');

Route::get('/csvLoadUpdate','Admin\CSV\CsvLoadController@edit');
Route::post('/csvLoadUpdate','Admin\CSV\CsvLoadController@csvShoesUpdate') -> name('update');

//
//return view('login_register.login');
//
//return view('login_register.register');
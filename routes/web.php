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
})->name('root');
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

Route::get('/products/{page_num?}', 'Admin\ProductController@index');

Route::get('/product_add', function () {
    return view('admin.product.pdoructadd');
});

Route::get('/product_edit', function () {
    return view('admin.product.productedit');
});

Route::get('/orders/{id?}', 'Admin\OrderController@index');
Route::get('/orderInfo/{id}', 'Admin\OrderController@orderInfo');
Route::post('/deleteProductFromOrder','Admin\OrderController@deleteOrderDetail');//удаление товара из заказа передавать id из orderdetails
Route::post('/deleteOrder','Admin\OrderController@deleteOrder');//удаление всего заказа передавать id заказа
Route::post('/addOrderDetail','Admin\OrderController@addOrderDetail');// добавление товара(ов) в заказ, передавать: id заказа массив id товаров, колличества товаров



Route::post('/finder','Admin\ProductController@finder');//пои сковик товаров по имени




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
Route::post('/product/delete','Admin/ProductController@delete'); // удаление товара - передавать id товара
Route::post('/product/update','Admin/ProductController@update'); // редактирование товара - передавать id товара и массив редактирование (с/без фото)



Route::get('/csvGlovesLoad','Admin\CSV\CsvGloversLoadController@index');
Route::post('/csvGlovesLoad','Admin\CSV\CsvGloversLoadController@csvGloversLoad') -> name('load_gloves');

Route::get('/csvGlovesUpdate','Admin\CSV\CsvGloversLoadController@edit');
Route::post('/csvGlovesUpdate','Admin\CSV\CsvGloversLoadController@csvGloversUpdate') -> name('update_gloves');

Route::post('/csvGlovesDelete','Admin\CSV\CsvGloversLoadController@csvGloversDelete') -> name('delete_gloves');



Route::get('/csvLoad','Admin\CSV\CsvLoadController@index');
Route::post('/csvLoad','Admin\CSV\CsvLoadController@csvShoesLoad') -> name('load');

Route::get('/csvLoadUpdate','Admin\CSV\CsvLoadController@edit');
Route::post('/csvLoadUpdate','Admin\CSV\CsvLoadController@csvShoesUpdate') -> name('update');

Route::post('/csvLoadDelete','Admin\CSV\CsvLoadController@csvShoesDelete') -> name('delete');

//
//return view('login_register.login');
//
//return view('login_register.register');
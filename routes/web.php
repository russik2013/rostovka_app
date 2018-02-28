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


Route::get('/about', function (){

    return view('user.about');

});

Route::get('/parsing', 'Parsing\ParsingController@index');

//////////////////////////////////////////////////////////////////////////////
Route::get('/', function () {
    return view('user.main_page.main');
})->name('root');


Route::get('/login', 'HomeController@login') -> name("login");
Route::post('/login', 'HomeController@auth');


Route::get('/register', 'HomeController@registerIndex');
Route::post('/register', 'HomeController@register') -> name('register');

//===================================================================================
Route::get('{id}/category','CategoryController@show');
Route::get('{id}/product/{number?}', 'ProductController@show');

//===================================================================================

Route::get('/checkout', function () {
    return view('user.billing.checkout');
});
Route::post('/checkout', 'SaleController@makeOrder');

Route::get('/testTopSales','SaleController@getTopSales');

Route::get('/cart', function () {
    return view('user.cart.cart');
})->name('cart');


//Route::get('/product_add', function () {
//    return view('admin.product.pdoructadd');
//});

Route::get('showFinderFinal/{name}', "ProductController@filterProduct");


Route::get('/pdfLoad/{id}', 'Admin\PDF\ReceiptController@index');
Route::get('/pdfShow', 'Admin\PDF\ReceiptController@show');

Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'admin'], function () {

        Route::get('/suppliers/{name?}', 'Admin\SuppliersController@index')->name('suppliers');
        Route::get('/suppliers_edit/{id}', 'Admin\SuppliersController@edit');
        Route::post('/suppliers_update', 'Admin\SuppliersController@update');
        Route::post('/suppliers_delete/{id}', 'Admin\SuppliersController@delete');

        Route::get('/admin_index/{name?}', 'Admin\HomeController@index') -> name("adminIndex");
        Route::get('/user_edit/{id}', 'Admin\HomeController@editClient');
        Route::post('/user_delete/{id}', 'Admin\HomeController@deleteClient');
        Route::post('/user_update', 'Admin\HomeController@updateClient');


        Route::post('/finder','Admin\ProductController@finder');//пои сковик товаров по имени

        Route::get('/orders/{name?}', 'Admin\OrderController@index')->name('orders');
        Route::get('/orderInfo/{id}', 'Admin\OrderController@orderInfo');
        Route::post('/deleteProductFromOrder','Admin\OrderController@deleteOrderDetail');//удаление товара из заказа передавать id из orderdetails
        Route::post('/deleteOrder','Admin\OrderController@deleteOrder');//удаление всего заказа передавать id заказа
        Route::post('/addOrderDetail','Admin\OrderController@addOrderDetail');// добавление товара(ов) в заказ, передавать: id заказа массив id товаров, колличества товаров
        Route::post('/orderUpdate', 'Admin\OrderController@update');

        Route::get('/products/{name?}', 'Admin\ProductController@index') ->name('products');//вывод списка всех товаров
        Route::get('/product', 'ProductController@create');
        Route::post('/product','ProductController@add');
        Route::post('/product/delete','Admin\ProductController@delete'); // удаление товара - передавать id товара
        Route::post('/product/update','Admin\ProductController@update'); // редактирование товара - передавать id товара и массив редактирование (с/без фото)
        Route::get('/product/{id}/edit','Admin\ProductController@edit'); // редактирование товара - ссылка на страницу редактирование

        Route::get('/csvGlovesLoad','Admin\CSV\CsvGloversLoadController@index');
        Route::post('/csvGlovesLoad','Admin\CSV\CsvGloversLoadController@csvGloversLoad') -> name('load_gloves');

        Route::get('/csvGlovesUpdate','Admin\CSV\CsvGloversLoadController@edit');
        Route::post('/csvGlovesUpdate','Admin\CSV\CsvGloversLoadController@csvGloversUpdate') -> name('update_gloves');

        Route::post('/csvGlovesDelete','Admin\CSV\CsvGloversLoadController@csvGloversDelete') -> name('delete_gloves');


        Route::get('/csvLoad','Admin\CSV\CsvLoadController@index');
        Route::post('/csvLoad','Admin\CSV\CsvLoadController@csvShoesLoad') -> name('load');

        //Route::get('/csvLoadUpdate','Admin\CSV\CsvLoadController@edit');
        Route::post('/csvLoadUpdate','Admin\CSV\CsvLoadController@csvShoesUpdate') -> name('update');

        Route::post('/csvLoadDelete','Admin\CSV\CsvLoadController@csvShoesDelete') -> name('delete');

        //Route::post('/csvDownload','Admin\CSV\CsvDownloadController@getCsvFileWithProduct') -> name('download');


        /////////////////////////Page orders///////////////////////////////
        Route::get('/csvDownloadOrders','Admin\CSV\CsvOrderController@getCsvFileWithOrders')-> name('downloadOrder'); // для производителя без фоткой //передать дату с и доту по. Возвращает xlsx файл.
        Route::get('/csvDownloadOrdersImages','Admin\CSV\CsvOrderController@getCsvFileWithOrdersImages')-> name('downloadOrderWithImages');// для производителя с фоткой передать дату с и доту по. Возвращает xlsx файл.
        Route::get('/csvDownloadOrdersToSend','Admin\CSV\CsvOrderController@getCsvFileWithOrdersToSend')-> name('downloadOrderToSend');
        ////////////////////////////////////////////////////////////////////////


        //////////////////////Page products////////////////////////////
        Route::get('/csvDownloadOrdersToManufacturer','Admin\CSV\CsvDownloadController@getCsvFileWithOrdersToManufacturer')-> name('downloadProductToManufacturer');
        Route::get('/csvDownloadOrdersToManufacturerOhnePhoto','Admin\CSV\CsvDownloadController@getCsvFileWithOrdersToManufacturerOhnePhoto')-> name('downloadProductToManufacturerOhnePhoto');
        Route::get('/csvDownload','Admin\CSV\CsvDownloadController@getCsvFileWithProduct') -> name('download');
        ////////////////////////////////////////////////////////////////

        Route::get('/personal', 'Admin\HomeController@personal');
        Route::post('/personal/update', 'Admin\HomeController@personalUpdate');

        Route::get('/type', 'Admin\TypeController@index') ->name('types');
        Route::get('/type/{id}', 'Admin\TypeController@delete');



    });


    Route::post('/logout', 'HomeController@logout');

    Route::get('/userinfo', 'ClientController@index');
    Route::post('/userUpdate', "ClientController@update");




});







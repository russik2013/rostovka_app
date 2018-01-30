<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/products', 'ProductController@getProductsToCategory');
Route::post('/product', 'ProductController@getProduct');

Route::post('/getSizesMass', 'ProductController@getSizesMass');
//Route::post('/getMaxSize', 'ProductController@getMaxSize');

Route::post('/news', 'ProductController@getNewsProduct');
Route::post('/topSales','SaleController@getTopSales');
Route::post('/pagination', 'ProductController@getPaginationPageCount');


//Route::get('/csvDownload','Admin\CSV\CsvDownloadController@getCsvFileWithProduct') -> name('download');


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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::post('login', 'UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::post('/user/register', 'UserController@register');
    Route::get('/user', 'UserController@getAuthenticatedUser');
    Route::get('/user/{type}', 'UserController@list');
    Route::get('/user/delete/{id}', 'UserController@destroy');
    Route::get('/user/me/{id}', 'UserController@show');
    Route::post('/user/update/{id}', 'UserController@update');

    // FORNECEDORES
    Route::post('/provider/add', 'ProviderController@store');
    Route::get('/provider/list/{situation}/{status?}', 'ProviderController@list');
    Route::get('/provider/show/{id}', 'ProviderController@show');
    Route::delete('/provider/delete/{id}', 'ProviderController@destroy');
    Route::post('/provider/update/{id}', 'ProviderController@update');
    Route::get('/provider/requestProducts/{id}', 'ProviderController@requestProducts');

    Route::get('/provider/product/atribute/list/{id}/{type?}', 'AtributeController@list');
    Route::post('/provider/product/atribute/add/{id}', 'AtributeController@store');
    Route::delete('/provider/product/atribute/delete/{id}', 'AtributeController@destroy');

    Route::get('/provider/product/variation/list/{id}/{product_id}', 'VariationController@list');
    Route::post('/provider/product/variation/add/{id}/{product_id}', 'VariationController@store');
    Route::delete('/provider/product/variation/delete/{id}', 'VariationController@destroy');

    Route::get('/provider/product/departament/list/{id}/{type?}', 'DepartamentController@list');
    Route::post('/provider/product/departament/add/{id}', 'DepartamentController@store');
    Route::delete('/provider/product/departament/delete/{id}', 'DepartamentController@destroy');

    Route::get('/provider/product/category/list/{id}/{type?}', 'CategoryController@list');
    Route::post('/provider/product/category/add/{id}', 'CategoryController@store');
    Route::delete('/provider/product/category/delete/{id}', 'CategoryController@destroy');

    Route::get('/provider/product/subcategory/list/{id}', 'SubcategoryController@list');
    Route::post('/provider/product/subcategory/add/{id}', 'SubcategoryController@store');
    Route::delete('/provider/product/subcategory/delete/{id}', 'SubcategoryController@destroy');

    Route::get('/provider/product/brand/list/{id}/{type?}', 'BrandController@list');
    Route::post('/provider/product/brand/add/{id}', 'BrandController@store');
    Route::delete('/provider/product/brand/delete/{id}', 'BrandController@destroy');

    Route::get('/provider/product/list/{id}', 'ProductController@list');
    Route::post('/provider/product/add/{id}', 'ProductController@store');
    Route::delete('/provider/product/delete/{id}', 'ProductController@destroy');
    Route::post('/provider/product/images/add/{product_id}', 'ImageProductController@store');
    Route::get('/provider/product/images/{product_id}', 'ImageProductController@list');

    //SHOP
    Route::get('/shop/show/{id}', 'ShopController@show');
    Route::get('/shop/provider/list/{segment}', 'ShopController@list');
    Route::get('/shop/provider/list/{segment}/{providerId}', 'ShopController@listShopProvider');
    Route::post('/shop/add', 'ShopController@store');

    Route::get('/shop/product/atribute/list/{id}', 'Shop_AtributeController@list');
    Route::post('/shop/product/atribute/add/{id}', 'Shop_AtributeController@store');
    Route::delete('/shop/product/atribute/delete/{id}', 'Shop_AtributeController@destroy');

    Route::get('/shop/product/variation/list/{id}/{product_id}', 'Shop_VariationController@list');
    Route::post('/shop/product/variation/add/{id}/{product_id}', 'Shop_VariationController@store');
    Route::delete('/shop/product/variation/delete/{id}', 'Shop_VariationController@destroy');

    Route::get('/shop/product/departament/list/{id}', 'Shop_DepartamentController@list');
    Route::post('/shop/product/departament/add/{id}', 'Shop_DepartamentController@store');
    Route::delete('/shop/product/departament/delete/{id}', 'Shop_DepartamentController@destroy');

    Route::get('/shop/product/category/list/{id}', 'Shop_CategoryController@list');
    Route::post('/shop/product/category/add/{id}', 'Shop_CategoryController@store');
    Route::delete('/shop/product/category/delete/{id}', 'Shop_CategoryController@destroy');

    Route::get('/shop/product/brand/list/{id}', 'Shop_BrandController@list');
    Route::post('/shop/product/brand/add/{id}', 'Shop_BrandController@store');
    Route::delete('/shop/product/brand/delete/{id}', 'Shop_BrandController@destroy');

    // REQUEST LIST PRODUCTS
    Route::get('/shop/product/list/{id}', 'ProductRequestController@list');
    Route::post('/shop/product/request/{id}', 'ProductRequestController@request');

    // REQUESTS
    Route::get('/requests', 'RequestsController@list');
    Route::post('/requests', 'RequestsController@search');

    //FINANCEIRO
    Route::get('/finances/extract', 'FinancesController@extract');
    Route::get('/finances/rescue', 'FinancesController@rescue');

});

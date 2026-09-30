<?php

Route::post('login', 'Api\RegisterController@login');
Route::post('login_app_tmc', 'Api\RegisterController@login_app_tmc');


Route::middleware('auth:api')->group( function () {
    /** FUNCIONES PARA CLIENTE EXTERNO */
    Route::get('products', 'Api\ProductController@index2');
    Route::get('product_by_id/{id_product}', 'Api\ProductController@show'); 
    Route::get('product_by_name/{name}', 'Api\ProductController@showbyname'); 
    Route::get('products_by_brand/{brand}', 'Api\ProductController@showbrands');
    Route::get('product_list_price/{id_product}', 'Api\ProductController@showprice');
    Route::get('stocks', 'Api\StockController@index');
    Route::get('stocks_by_warehouse/{id_warehouse}', 'Api\StockController@warehouse'); 
    Route::get('stocks_by_id/{id_product}', 'Api\StockController@showstockbyid'); 
    /** PETICIONES PARA EQUIPO TMC */
    Route::get('documents', 'Api\DocumentController@index');
    Route::get('/documents_by_type/{type} ', 'Api\DocumentController@documentType');

    Route::get('products_tmc', 'Api\ProductController@index');
    Route::get('product_by_id_tmc/{id_product}', 'Api\ProductController@show_tmc'); 
    Route::get('product_by_name_tmc/{name}', 'Api\ProductController@showbyname_tmc'); 
    Route::get('products_by_brand_tmc/{brand}', 'Api\ProductController@showbrands_tmc');
});


Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Categories
    Route::apiResource('categories', 'CategoriesApiController');

    // Questions
    Route::apiResource('questions', 'QuestionsApiController');

    // Options
    Route::apiResource('options', 'OptionsApiController');

    // Results
    Route::apiResource('results', 'ResultsApiController');
});

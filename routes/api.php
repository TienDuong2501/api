<?php

use Illuminate\Http\Request;




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/products','ProductController');

Route::group(['prefix' => 'products'],function(){
	Route::apiResource('/{product}/reviews','ReviewController');
});
//day la duong dan url de truy cap vao apiroute
// http://127.0.0.1:8000/api/products/25
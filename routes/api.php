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


Route::get('my_api','PostsController@my_api');

// Articles API
Route::get('articles', 'ArticleController@index');

//List single Article
Route::get('articles/{id}', 'ArticleController@show');


//Create new article
Route::post('article' , 'ArticleController@store');

//Update article
Route::put('article' , 'ArticleController@store');

//Delete
Route::delete('article' , 'ArticleController@destroy');

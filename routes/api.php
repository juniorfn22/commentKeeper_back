<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['App\Http\Middleware\Cors']], function () {
    Route::get('/', "App\Http\Controllers\ComentariosController@index");
    Route::get('/comentarios/$id', "App\Http\Controllers\ComentariosController@show");
    Route::post('/comentarios',"App\Http\Controllers\ComentariosController@store");
    Route::put('/comentarios/$id',"App\Http\Controllers\ComentariosController@update");
    Route::delete('/comentarios/$id',"App\Http\Controllers\ComentariosController@destroy");
    Route::resource('comentarios', 'App\Http\Controllers\ComentariosController');
});


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/tambah_data', 'App\Http\Controllers\DataSiswaController@store');
Route::get('/lihat_data', 'App\Http\Controllers\DataSiswaController@show');
Route::put('/edit_data/{id}', 'App\Http\Controllers\DataSiswaController@update');
Route::delete('/hapus_data/{id}', 'App\Http\Controllers\DataSiswaController@destroy');

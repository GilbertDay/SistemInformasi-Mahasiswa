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

//Read Data
Route::get('/mahasiswa/all', 'MahasiswaAPIController@all');
//Tambah Data
Route::post('/mahasiswa/create', 'MahasiswaAPIController@create');
//Edit Data
Route::post('/mahasiswa/update', 'MahasiswaAPIController@update');
//Hapus Data
Route::delete('/mahasiswa/delete/{id}', 'MahasiswaAPIController@delete');

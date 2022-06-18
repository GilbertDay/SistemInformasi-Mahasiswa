<?php

Route::group(['middleware' => ['cekrole:Admin']], function () {
    
    //Read,Insert,Search
    Route::get('/mahasiswa/formmahasiswa', 'MahasiswaController@formmahasiswa');
    Route::post('/mahasiswa/simpanmahasiswa', 'MahasiswaController@simpanmahasiswa');
    //Update
    Route::get('/mahasiswa/editmahasiswa/{id}', 'MahasiswaController@editmahasiswa');
    Route::put('/mahasiswa/updatemahasiswa/{id}', 'MahasiswaController@updatemahasiswa');
    //Delete
    Route::get('/mahasiswa/hapusmahasiswa/{id}', 'MahasiswaController@hapusmahasiswa');

    //Cari User
    Route::get('/user/cari', 'AuthController@pencarian');
    //Read User
    Route::get('/user', 'AuthController@user');
    //Insert User
    Route::get('/user/formuser', 'AuthController@formuser');
    Route::post('/user/simpanuser', 'AuthController@simpanuser'); 
    //Update User
    Route::get('/user/edituser/{id}', 'AuthController@edituser');
    Route::put('/user/updateuser/{id}', 'AuthController@updateuser');
    //Delete User
    Route::get('/user/hapususer/{id}', 'AuthController@hapususer');

});

Route::group(['middleware' => ['cekrole:Admin,User']], function () {
    Route::get('/home', function () {
        return view('home', ['title'=>'Home']);
    });
    Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian');
    Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');
    //Logout
    Route::get('/logout','AuthController@logout');
});

//Login Authentication
Route::get('/login', 'AuthController@login')->middleware('guest');
Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');

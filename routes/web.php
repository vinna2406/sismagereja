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
Auth::routes();

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function(){
    return redirect('/redirecting');
});

Route::get('/redirecting', function(){
    if(Auth::user()->role == 'staff'){
        return redirect('staff');
    }elseif(Auth::user()->role == 'pendeta'){
        return redirect('pendeta');
    }
});

Route::group(['middleware' => 'role:staff', 'prefix' => 'staff', 'namespace' => 'Staff'], function(){
    Route::get('/', function(){
        return redirect('staff/dashboard');
    });
    Route::get('dashboard', 'DashboardController@index');

    Route::get('anggota/tambah-anggota', 'AnggotaController@tambahAnggota');
    Route::post('anggota', 'AnggotaController@storeAnggota');
    Route::get('anggota', 'AnggotaController@indexAnggota');
    Route::get('anggota/{id}', 'AnggotaController@showAnggota');
    Route::get('anggota/{id}/edit', 'AnggotaController@editAnggota');
    Route::put('anggota/{id}/edit', 'AnggotaController@updateAnggota');

    Route::get('baptis/tambah-baptis/{id}/proses', 'BaptisController@createBaptis');

    Route::get('baptis/tambah-baptis', 'BaptisController@tambahBaptis');
    Route::post('baptis', 'BaptisController@storeBaptis');
    Route::get('baptis', 'BaptisController@indexBaptis');
    Route::get('baptis/{id}', 'BaptisController@showBaptis');
    Route::get('baptis/{id}/edit', 'BaptisController@editBaptis');
    Route::put('baptis/{id}/edit', 'BaptisController@updateBaptis');

    Route::get('kegiatan/tambah-kegiatan', 'KegiatanController@tambahKegiatan');
    Route::post('kegiatan', 'KegiatanController@storeKegiatan');
    Route::get('kegiatan', 'KegiatanController@indexKegiatan');
    Route::get('kegiatan/{id}', 'KegiatanController@showKegiatan');
    Route::get('kegiatan/{id}/edit', 'KegiatanController@editKegiatan');
    Route::put('kegiatan/{id}/edit', 'KegiatanController@updateKegiatan');

    Route::get('pendeta/tambah-pendeta', 'PendetaController@tambahPendeta');
    Route::post('pendeta', 'PendetaController@storePendeta');
    Route::get('pendeta', 'PendetaController@indexPendeta');
    Route::get('pendeta/{id}', 'PendetaController@showPendeta');
    Route::get('pendeta/{id}/edit', 'PendetaController@editPendeta');
    Route::put('pendeta/{id}/edit', 'PendetaController@updatePendeta');

    Route::get('pernikahan/tambah-pernikahan', 'PernikahanController@tambahPernikahan');
    Route::post('pernikahan', 'PernikahanController@storePernikahan');
    Route::get('pernikahan', 'PernikahanController@indexPernikahan');
    Route::get('pernikahan/{id}', 'PernikahanController@showPernikahan');
    Route::get('pernikahan/{id}/edit', 'PernikahanController@editPernikahan');
    Route::put('pernikahan/{id}/edit', 'PernikahanController@updatePernikahan');

    Route::get('admin/tambah-admin', 'AdminController@tambahAdmin');
    Route::post('admin', 'AdminController@storeAdmin');
    Route::get('admin', 'AdminController@indexAdmin');
    Route::get('admin/{id}', 'AdminController@showAdmin');
    Route::get('admin/{id}/edit', 'AdminController@editAdmin');
    Route::put('admin/{id}/edit', 'AdminController@updateAdmin');
    // kalo mau nambah controller baru di stagff
});

Route::group(['middleware' => 'role:pendeta', 'prefix' => 'pendeta', 'namespace' => 'Pendeta'], function(){
    Route::get('/', function(){
        return redirect('pendeta/dashboard');
    });
    Route::get('dashboard', 'DashboardController@index');

    // kalo mau nambah controller baru di pendeta
});

Route::get('/app',function(){
    return view('frontend.layouts.app');
});

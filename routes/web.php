<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/profil sekolah','SmkController@smkyapmi')->name('smk');
    Route::get('/siswa','DashboardController@daftarJurusan')->name('siswa');
    Route::get('/siswa/{jurusan}/{kelas}','DashboardController@daftarSiswa')->name('daftarSiswa');
    Route::get('/siswa/{jurusan}/{kelas}/tambah','DashboardController@addSiswa')->name('addSiswa');
    Route::get('/tambah_siswa','SiswaController@tambah_siswa')->name('tambah_siswa');
    Route::post('/siswa/{jurusan}/{kelas}/create','DashboardController@createSiswa')->name('createSiswa');
    Route::get('/siswa/{id}/edit','SiswaController@edit');
    Route::post('/siswa/{id}/update','SiswaController@update');
    Route::get('/siswa/{id}/delete','SiswaController@delete');

    Route::get('/tkj10','SiswaController@tkj10')->name('tkj10');
    Route::get('/addtkj10','SiswaController@addtkj10')->name('addtkj10');
    Route::post('/tkj10/createtkj','SiswaController@createtkj');
    Route::get('/tkj10/{id}/edittkj10','SiswaController@edittkj10');
    Route::post('/tkj10/{id}/updatetkj10','SiswaController@updatetkj10');
    Route::get('/tkj10/{id}/deletetkj10','SiswaController@deletetkj10');


    Route::get('/guru','guruController@index_guru')->name('guru');
    Route::get('/tambah_guru','guruController@tambah_guru')->name('tambah_guru');
    Route::post('/guru/create','guruController@create');
    Route::get('/guru/{id}/edit','guruController@edit');
    Route::post('/guru/{id}/update','guruController@update');
    Route::get('/guru/{id}/delete','guruController@delete');

    Route::get('/matapelajaran','MapelController@mapel')->name('mapel');
    Route::get('/tambah_mapel','MapelController@tambah_mapel')->name('tambah_mapel');
    Route::post('/matapelajaran/create','MapelController@create');
    Route::get('/mapel/{id}/edit','MapelController@edit');
    Route::post('/mapel/{id}/update','MapelController@update');
    Route::get('/mapel/{id}/delete','MapelController@delete');
});

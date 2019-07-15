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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/', function () {
//    return view('frontend.home');
//});

Route::get('/', 'FrontendController@home')->name('home.home');

Route::get('/berita', 'FrontendController@beritanews')->name('berita.news');
Route::get('/berita/detail/{slug}', 'FrontendController@beritadetail')->name('berita.detail');


Route::get('/squad', 'FrontendController@daftarsquad')->name('squad.daftarsquad');
Route::get('/squad/detail/{slug}', 'FrontendController@squaddetail')->name('squad.detail');

Route::get('/daftarpertandingan', function () {
    return view('frontend.daftarpertandingan');
});

Route::get('/galeri', function () {
    return view('frontend.galeri');
});


Route::group(['prefix' => '/admin'], function(){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    Route::get('/category','CategoryController@index')->name('category');
    Route::get('/category/tambah','CategoryController@create')->name('category.create');
    Route::post('/category/tambah','CategoryController@store')->name('category.store');
    Route::get('/category/edit/{id}','CategoryController@edit')->name('category.edit');
    Route::patch('/category/edit/{id}','CategoryController@update')->name('category.update');
    Route::get('/category/hapus/{id}','CategoryController@destroy')->name('category.destroy');

    Route::get('/berita','BeritaController@index')->name('berita');
    Route::get('/berita/tambah','BeritaController@create')->name('berita.create');
    Route::post('/berita/tambah','BeritaController@store')->name('berita.store');
    Route::get('/berita/edit/{id}','BeritaController@edit')->name('berita.edit');
    Route::patch('/berita/edit/{id}','BeritaController@update')->name('berita.update');
    Route::get('/berita/hapus/{id}','BeritaController@destroy')->name('berita.destroy');

    Route::get('/squad','SquadController@index')->name('squad');
    Route::get('/squad/tambah','SquadController@create')->name('squad.create');
    Route::post('/squad/tambah','SquadController@store')->name('squad.store');
    Route::get('/squad/edit/{id}','SquadController@edit')->name('squad.edit');
    Route::patch('/squad/edit/{id}','SquadController@update')->name('squad.update');
    Route::get('/squad/hapus/{id}','SquadController@destroy')->name('squad.destroy');

    Route::get('/galeri','GaleriController@index')->name('galeri');
    Route::get('/galeri/tambah','GaleriController@create')->name('galeri.create');
    Route::post('/galeri/tambah','GaleriController@store')->name('galeri.store');
    Route::get('/galeri/edit/{id}','GaleriController@edit')->name('galeri.edit');
    Route::patch('/galeri/edit/{id}','GaleriController@update')->name('galeri.update');
    Route::get('/galeri/hapus/{id}','GaleriController@destroy')->name('galeri.destroy');

    Route::get('/club','ClubController@index')->name('club');
    Route::get('/club/tambah','ClubController@create')->name('club.create');
    Route::post('/club/tambah','ClubController@store')->name('club.store');
    Route::get('/club/edit/{id}','ClubController@edit')->name('club.edit');
    Route::patch('/club/edit/{id}','ClubController@update')->name('club.update');
    Route::get('/club/hapus/{id}','ClubController@destroy')->name('club.destroy');

    Route::get('/jadwal','PertandinganController@indexjadwal')->name('jadwal');
    Route::get('/jadwal/tambah','PertandinganController@createjadwal')->name('jadwal.create');
    Route::post('/jadwal/tambah','PertandinganController@storejadwal')->name('jadwal.store');
    Route::get('/jadwal/edit/{id}','PertandinganController@editjadwal')->name('jadwal.edit');
    Route::patch('/jadwal/edit/{id}','PertandinganController@updatejadwal')->name('jadwal.update');
    Route::get('/jadwal/hapus/{id}','PertandinganController@destroy')->name('jadwal.destroy');

    Route::get('/hasil','PertandinganController@indexhasil')->name('hasil');
    Route::get('/hasil/edit/{id}','PertandinganController@edithasil')->name('hasil.edit');
    Route::patch('/hasil/edit/{id}','PertandinganController@updatehasil')->name('hasil.update');

});

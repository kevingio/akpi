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
// Authentication
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('login',  'Auth\LoginController@showLoginForm');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index');

Route::get('/kontak', function () { return view('client.contact-us'); });

Route::get('/galeri', 'GalleryController@index');

Route::prefix('/profil-akpi')->group(function () {
    Route::get('/', function () { return view('client.profile.index'); });
    Route::get('/sejarah', function () { return view('client.profile.history'); });
    Route::get('/pendiri', function () { return view('client.profile.founder'); });
    Route::get('/logo', function () { return view('client.profile.logo'); });
    Route::get('/mars', function () { return view('client.profile.mars'); });
    Route::get('/kode-etik', function () { return view('client.profile.code-ethics'); });
    Route::get('/anggaran-dasar', function () { return view('client.profile.anggaran-dasar'); });
    Route::get('/anggaran-rumah-tangga', function () { return view('client.profile.anggaran-rumah-tangga'); });
    Route::get('/pengurus', 'CommitteeController@index');
    Route::get('/anggota', 'HomeController@showMembers');
});

Route::prefix('/program')->group(function () {
    Route::get('/', 'ProgramController@index');
    Route::get('/detail/{program}', 'ProgramController@show');
    Route::resource('kegiatan', 'ActivityController');
    Route::resource('penerbitan', 'PublicationController');
    Route::resource('journal', 'JournalController');
    Route::get('/counseling', function () { return view('client.program.counseling'); });
});

Route::prefix('admin')->middleware('auth')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('/', function () { return redirect('/admin/profil-akpi/mars'); });
    Route::prefix('profil-akpi')->group(function () {
        Route::resource('mars', 'MarsController');
        Route::resource('anggaran-dasar', 'AnggaranDasarController');
        Route::resource('anggaran-rumah-tangga', 'AnggaranRumahTanggaController');
        Route::resource('kode-etik', 'CodeEthicsController');
        Route::resource('banner', 'BannerController');
    });
});

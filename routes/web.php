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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/upload', 'HomeController@upload');
Route::post('/upload/proses', 'HomeController@fileUploadPost');

Route::get('/supervisor', function () {
    return view('supervisor');
});

Route::get('/kepsek', function () {
    return view('kepsek');
});

Route::get('/kurikulum', function () {
    return view('kurikulum');
});
Route::resource('kurikulums','KurikulumController'); 
Route::resource('gurus','GuruController');
Route::resource('supervisors','SupervisorController');
Route::resource('nilais','NilaiController');
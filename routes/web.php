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
Route::post('/createAdmin', 'App\Http\Controllers\AdminController@createAdmin')->name('createAdmin');
Route::get('/index', 'App\Http\Controllers\AdminController@index')->middleware(['auth'])->name('index');
Route::post('/create', 'App\Http\Controllers\AdminController@create')->middleware(['auth'])->name('create');

Route::get('/prof_index', 'App\Http\Controllers\AdminController@prof_index')->middleware(['auth'])->name('prof_index');
Route::post('/identifiant', 'App\Http\Controllers\AdminController@identifiant')->name('identifiant');
Route::get('/edit', 'App\Http\Controllers\AdminController@edit')->name('edit');
Route::post('/update', 'App\Http\Controllers\AdminController@update')->name('update');
Route::get('/connect', 'App\Http\Controllers\AdminController@connect')->name('connect');

Route::get('/class', 'App\Http\Controllers\ClasseController@class')->middleware(['auth'])->name('class');
Route::post('/create_class', 'App\Http\Controllers\ClasseController@create_class')->middleware(['auth'])->name('create_class');

Route::get('/emploi', 'App\Http\Controllers\EmploiController@emploi')->middleware(['auth'])->name('emploi');
Route::post('/create_emploi', 'App\Http\Controllers\EmploiController@create_emploi')->middleware(['auth'])->name('create_emploi');

Route::get('/', function () {
    return view('admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

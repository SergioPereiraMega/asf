<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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

Route::get('/', [App\Http\Controllers\PageController::class, 'index']);

Route::get('/nosotros', [App\Http\Controllers\PageController::class, 'nosotros']);

Route::get('/contacto', [App\Http\Controllers\ContactUsFormController::class, 'createForm']);

Route::post('/contacto', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/asfadmin/listado', [App\Http\Controllers\ContactUsFormController::class, 'ContactShow'])->middleware('auth')->name('contact.list');

Route::delete('/asfadmin/listado/delete/{id}', [App\Http\Controllers\ContactUsFormController::class, 'ContactDelete'])->middleware('auth')->name('contact.delete');

Route::post('/asfadmin/listado/logout', [App\Http\Controllers\UserController::class, 'logout']);

Auth::routes(['register' => false]);


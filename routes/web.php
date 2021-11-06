<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\PageController::class, 'index']);

Route::get('/nosotros', [App\Http\Controllers\PageController::class, 'nosotros']);

Route::get('/contacto', [App\Http\Controllers\ContactUsFormController::class, 'createForm']);

Route::post('/contacto', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');


Route::get('/asfadmin/listado', [App\Http\Controllers\ContactUsFormController::class, 'ContactShow']);


Auth::routes();

Auth::routes(['register' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

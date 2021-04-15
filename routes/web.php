<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
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

Route::get('/', [JobsController::Class, 'index'])->name('index');

Route::get('/dashboard', [JobsController::Class, 'dashboard'])
->name('dashboard')
->middleware('auth');


Route::get('/login', [JobsController::Class, 'login'])->name('login');
<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\authcontroller;
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
    return view('welcome');
})->name('welcome');

Route::any('/login', [admincontroller::class, 'login'])->name('admin.login');
Route::any('/logout', [admincontroller::class, 'logout'])->name('admin.logout');

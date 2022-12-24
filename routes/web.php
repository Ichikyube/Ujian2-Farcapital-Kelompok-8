<?php

use App\Http\Controllers\{ admincontroller, LandingController };
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

Route::any('/form', [LandingController::class, 'aspirasi'])->name('form.aspirasi');

Route::prefix('form')
    ->name('form.')
    ->controller(LandingController::class)
    ->group(function(){
        Route::get('/aspirasi', 'aspirasi')->name('aspirasi');
    });

Route::prefix('admin')
    ->controller(AdminController::class)
    ->group(function() {
        Route::get('/dashboard', 'index');
        Route::get('/{aspirasi}', 'show');
        Route::get('/create', 'create');
        Route::post('/{id}', 'store');
        Route::delete('/{id}', 'delete');
});

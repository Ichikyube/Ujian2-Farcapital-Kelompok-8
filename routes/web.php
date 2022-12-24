<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\manageadmincontroller;
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

Route::prefix('form')
    ->name('form.')
    ->controller(LandingController::class)
    ->group(function(){
        Route::get('/aspirasi', 'aspirasi')->name('aspirasi');
    });

Route::prefix('admin')
    ->name('admin.')
    ->controller(admincontroller::class)
    ->group(function() {
        Route::get('/dashboard', 'index');
        Route::get('/{aspirasi}', 'show');
        Route::get('/create', 'create');
        Route::post('/{id}', 'store');
        Route::delete('/{id}', 'delete');
});

Route::prefix('Admin')->group(function() {
    Route::get('/', [manageadmincontroller::class, 'index'])->name('admin.listadmin');
    Route::get('/store', [manageadmincontroller::class, 'store'])->name('admin.storeadmin');
    Route::get('/showUpdate/{id}', [manageadmincontroller::class, 'showupdate'])->name('admin.showupdate');
    Route::post('/createadmin', [manageadmincontroller::class, 'create'])->name('admin.createadmin');
    Route::post('/update/{id}', [manageadmincontroller::class, 'update'])->name('admin.updateadmin');
    Route::get('/delete/{id}', [manageadmincontroller::class, 'delete'])->name('admin.deleteadmin');
});

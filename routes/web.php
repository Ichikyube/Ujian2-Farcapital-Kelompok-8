<?php

use App\Http\Controllers\{ admincontroller, manageadmincontroller, authcontroller, LandingController };
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
        Route::get('/dashboard', 'index')->name('list');
        Route::get('/{aspirasi}', 'show')->name('detail');
});

Route::prefix('Admin')->group(function() {
    Route::get('/', [admincontroller::class, 'list'])->name('admin.listadmin');
    Route::get('/store', [admincontroller::class, 'store'])->name('admin.storeadmin');
    Route::get('/showUpdate/{id}', [admincontroller::class, 'showupdate'])->name('admin.showupdate');
    Route::post('/createadmin', [admincontroller::class, 'create'])->name('admin.createadmin');
    Route::post('/update/{id}', [admincontroller::class, 'update'])->name('admin.updateadmin');
    Route::get('/delete/{id}', [admincontroller::class, 'delete'])->name('admin.deleteadmin');
});

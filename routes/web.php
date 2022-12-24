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

Route::prefix('Admin')->group(function() {
    Route::get('/', [manageadmincontroller::class, 'index'])->name('admin.listadmin');
    Route::get('/storeAdmin', [manageadmincontroller::class, 'store'])->name('admin.storeadmin');
    Route::get('/showUpdate/{id}', [manageadmincontroller::class, 'showupdate'])->name('admin.showupdate');
    Route::post('/updateAdmin/{id}', [manageadmincontroller::class, 'update'])->name('admin.update');
    Route::post('/createAdmin', [manageadmincontroller::class, 'create'])->name('admin.create');
    Route::get('/deleteAdmin', [manageadmincontroller::class, 'delete'])->name('admin.delete');
});

Route::prefix('admin')
    ->controller(AdminController::class)
    ->group(function() {
        Route::get('/dashboard', 'index');
        Route::get('/{aspirasi}', 'show');
});

<?php

use App\Http\Controllers\KlasterController as KlasterControllerAlias;
use App\Http\Controllers\KlastrController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VillageController;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\UsersController;
use \App\Http\Controllers\RegionController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users',UsersController::class);
    Route::resource('klaster', KlasterControllerAlias::class);
    Route::resource('region',RegionController::class);
    Route::resource('village',VillageController::class);
    Route::resource('staff',StaffController::class);

});

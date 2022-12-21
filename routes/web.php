<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;

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

Route::get('/', [UtilityController::class, 'welcome']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

     //route for utility
     Route::resource('/utilities', UtilityController::class);
     Route::get('/confirm', 'App\Http\Controllers\UtilityController@confirm')->name('confirm');
     Route::get('/edit{id}', [UtilityController::class, 'edit']);
     Route::post('/update/{id}', [UtilityController::class, 'update'])->name('utility.update');
     Route::delete('utility/{id}', [UtilityController::class, 'destroy'])->name('utility.delete');

    Route::get('/user', [UserController::class, 'index'])->name('user');
     Route::get('/utilitydesc{id}', [UtilityController::class, 'utilitydesc']);
 
});

Route::get('/utilitydesc{id}', [UtilityController::class, 'utilitydesc']);
Route::match(['get','post'],'/botman',[BotManController::class,'index']);
Route::get('/map', function() {
    return view('geolocate');
});
require __DIR__.'/auth.php';

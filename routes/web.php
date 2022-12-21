<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UtilityController::class, 'welcome'])->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
     //route for utility
    Route::get('/utilityadmin', [UtilityController::class, 'utilityList'])->name('utilityadmin');
    Route::resource('/utility', UtilityController::class);
    Route::get('/confirm', 'App\Http\Controllers\UtilityController@confirm')->name('confirm');
    Route::get('/edit{id}', [UtilityController::class, 'edit']);
    Route::post('/update/{id}', [UtilityController::class, 'update'])->name('utility.update');
    Route::delete('utility/{id}', [UtilityController::class, 'delete'])->name('utility.delete');

    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::delete('user/{id}', [UserController::class, 'delete'])->name('user.delete');

    Route::get('/admindash', [UserController::class, 'admin'])->name('admindash');
 
});

Route::get('/utilitydesc{id}', [UtilityController::class, 'utilitydesc']);

Route::match(['get','post'],'/botman',[BotManController::class,'index']);

Route::get('/map', function() {
    return view('geolocate');
});

Route::get('/search', [UtilityController::class, 'search']);


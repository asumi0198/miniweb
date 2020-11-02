<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Profile\UpdateProfileInformationController;
use Illuminate\Support\Facades\Auth;
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
})->name('index');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('', [ProfileController::class, 'index'])->name('index');
        Route::patch('information/{user}', [UpdateProfileInformationController::class, 'update'])->name('update.information');
        Route::delete('photo/{user}', [UpdateProfileInformationController::class, 'deletePhoto'])->name('delete.photo');
        Route::patch('password/{user}', [UpdateProfileInformationController::class, 'updatePassword'])->name('update.password');
    });
    Route::resource('company', \App\Http\Controllers\CompanyController::class);
    Route::resource('remote', \App\Http\Controllers\RemoteController::class);
});

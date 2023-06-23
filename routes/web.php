<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\AboutController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::resource('/', HomeController::class);

Route::resource('tour', TourController::class);

Route::resource('rental', RentalController::class);

Route::resource('partner', PartnerController::class);

Route::resource('about', AboutController::class);
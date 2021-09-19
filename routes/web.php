<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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
    return view('index');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('users.index');
    })->name('home');

    // Route::get('/restaurants', function () {
    //     return view('restaurants.index');
    // })->name('restaurants');

    Route::get('/foods', function () {
        return view('foods');
    })->name('foods');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/profile', function () {
        return view('users.profile');
    })->name('profile');

    // Restaurant Routes
    Route::resource('restaurant', RestaurantController::class);
});

require __DIR__ . '/auth.php';

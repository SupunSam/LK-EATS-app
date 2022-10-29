<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\FoodItemController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\Admin\AdminController;

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

//For Guest Users
Route::get('/', [HomeController::class, 'home'])
    ->name('/');

Route::get('/home', [HomeController::class, 'home'])
    ->name('home');

Route::get('/BrowseRestaurants', [RestaurantController::class, 'restbrowser'])
    ->name('BrowseRestaurants');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/search', [HomeController::class, 'search'])
    ->name('search');

//For LoggedIn Users
Route::group(['middleware' => 'auth'], function () {

    Route::get('/orders', [OrderController::class, 'orders'])
        ->name('orders');

    Route::get('/orders/{id}', [OrderController::class, 'show'])
        ->name('orders.show');

    Route::delete('/orders/{id}', [OrderController::class, 'destroy'])
        ->name('orders.destroy');

    // Profile Link
    Route::get('/profile', [HomeController::class, 'profile'])
        ->name('profile');

    Route::patch('/profileUpdate', [HomeController::class, 'profileUpdate'])
        ->name('profileUpdate');

    // Restaurant Routes
    Route::resource('restaurant', RestaurantController::class);
    Route::get('/myrest', [RestaurantController::class, 'myrest'])
        ->name('restaurant.myrest');

    // FoodItem Routes
    Route::resource('fooditems', FoodItemController::class);

    Route::get('cart', [OrderController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [OrderController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [OrderController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [OrderController::class, 'remove'])->name('remove.from.cart');

    // Order Placement
    Route::get('newOrder', [OrderController::class, 'newOrder'])->name('newOrder');
});

// Admin Routes
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function () {

    // App Management
    Route::get('dashboard', [AdminController::class, 'dashboard'])
        ->name('dashboard');
    Route::get('rest', [AdminController::class, 'restmanage'])
        ->name('rest.manage');
    Route::get('food', [AdminController::class, 'foodmanage'])
        ->name('food.manage');

    // Roles and Permissions Routes
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ClientController::class, 'index'])->name('client.index');

Route::prefix('/client')->as('client')->group(function ()
{
    Route::get('/', [ClientController::class, 'index'])->name('index');
});

Route::prefix('/admin')->as('admin.')->group(function ()
{

});

Route::middleware('auth')->group(function () {
    Route::prefix('/admin')->as('admin.')->group(function (){
        Route::get('/dashboard',  [AdminController::class, 'dashboard'])->name('dashboard');

        Route::get('/users', [AdminController::class, 'showUsers'])->name('users');
        Route::get('/category', [AdminController::class, 'show_category'])->name('category');
        Route::post('/category', [AdminController::class, 'category_post'])->name('category.post');
        Route::get('/orders', [AdminController::class, 'show_orders'])->name('orders');

    });

    Route::prefix('/user')->as('user.')->group(function (){
        Route::get('/dashboard',  [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('/orders',  [UserController::class, 'orders'])->name('orders');
        Route::post('/orders',  [UserController::class, 'orders_post'])->name('orders.post');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

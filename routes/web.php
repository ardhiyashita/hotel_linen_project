<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HotelTransactionController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/coba', [CobaController::class, 'coba']);
    Route::get('/home', [DashboardController::class, 'index'])->name('home');

    Route::get('/hotel_transaction', [HotelTransactionController::class, 'index'])->name('hotel_transaction_index');
    Route::get('/hotel_transaction_create', [HotelTransactionController::class, 'create'])->name('create');
    Route::get('/hotel_transaction_update', [HotelTransactionController::class, 'update'])->name('update');
    Route::get('/hotel_transaction_delete', [HotelTransactionController::class, 'delete'])->name('delete');
    Route::get('/hotel_transaction_detail', [HotelTransactionController::class, 'detail'])->name('detail');

    Route::get('/linen_to_receive', [HotelTransactionController::class, 'index'])->name('hotel_transaction_index');

}); 

require __DIR__ . '/auth.php';

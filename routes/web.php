<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HotelTransactionController;
use App\Models\LinenType;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/coba', [CobaController::class, 'coba']);
    Route::get('/', [DashboardController::class, 'index'])->name('home');


    Route::controller(LinenCategory::class)->group(function() {
        Route::get('/linen_category_index', 'index')->name('linen_category_index');        
        Route::get('/linen_category_delete', 'delete')->name('linen_category_delete');
        Route::get('/linen_category_detail', 'detail')->name('linen_category_detail');

    });

    Route::controller(LinenType::class)->group(function() {
        Route::get('/linen_type_index', 'index')->name('linen_type_index');        
        Route::get('/linen_type_delete', 'delete')->name('linen_type_delete');
        Route::get('/linen_type_detail', 'detail')->name('linen_type_detail');

    });

    Route::controller(LinenType::class)->group(function() {
        Route::get('/linen_template_index', 'index')->name('linen_template_index');        
        Route::get('/linen_template_delete', 'delete')->name('linen_template_delete');
        Route::get('/linen_template_detail', 'detail')->name('linen_template_detail');

    });

    Route::controller(LinenType::class)->group(function() {
        Route::get('/linen_index', 'index')->name('linen_index');        
        Route::get('/linen_delete', 'delete')->name('linen_delete');
        Route::get('/linen_detail', 'detail')->name('linen_detail');

    });

    Route::controller(HotelTransactionController::class)->group(function() {
        Route::get('/hotel_transaction_index', 'index')->name('hotel_transaction_index');        
        Route::get('/hotel_transaction_delete', 'delete')->name('hotel_transaction_delete');
        Route::get('/hotel_transaction_detail', 'detail')->name('hotel_transaction_detail');

    });


}); 

require __DIR__ . '/auth.php';

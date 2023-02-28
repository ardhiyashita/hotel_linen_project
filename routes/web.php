<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\HotelTransactionController;
use App\Http\Controllers\LinenCategoryController;
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


    Route::controller(LinenCategoryController::class)->group(function() {
        Route::get('/linen_category_index', 'index')->name('linen_category_index');        
        Route::get('/linen_category_create', 'create')->name('linen_category_create');        
        Route::get('/linen_category_read', 'read')->name('linen_category_read');
        Route::get('/linen_category_update', 'update')->name('linen_category_update');        
        Route::get('/linen_category_delete', 'delete')->name('linen_category_delete');
        

    });

    Route::controller(LinenType::class)->group(function() {
        Route::get('/linen_type_index', 'index')->name('linen_type_index');        
        Route::get('/linen_type_read', 'read')->name('linen_type_read');
        Route::get('/linen_type_delete', 'delete')->name('linen_type_delete');
        

    });

    Route::controller(LinenType::class)->group(function() {
        Route::get('/linen_template_index', 'index')->name('linen_template_index');        
        Route::get('/linen_template_read', 'read')->name('linen_template_read');
        Route::get('/linen_template_delete', 'delete')->name('linen_template_delete');
        

    });

    Route::controller(LinenType::class)->group(function() {
        Route::get('/linen_index', 'index')->name('linen_index');        
        Route::get('/linen_read', 'read')->name('linen_read');
        Route::get('/linen_delete', 'delete')->name('linen_delete');
        

    });

    Route::controller(DriverController::class)->group(function() {
        Route::get('/driver_index', 'index')->name('driver_index');        
        Route::get('/driver_create', 'create')->name('driver_create');   
        Route::post('/driver_create_save', 'create_save')->name('driver_create_save');   
        Route::get('/driver_read', 'read')->name('driver_read');
        Route::get('/driver_update', 'update')->name('driver_update');        
        Route::post('/driver_update_save', 'update_save')->name('driver_update_save');        
        Route::get('/driver_delete', 'delete')->name('driver_delete');
        

    });

    Route::controller(HotelTransactionController::class)->group(function() {
        Route::get('/hotel_transaction_index', 'index')->name('hotel_transaction_index');        
        Route::get('/hotel_transaction_read', 'read')->name('hotel_transaction_read');
        Route::get('/hotel_transaction_delete', 'delete')->name('hotel_transaction_delete');
        

    });


}); 

require __DIR__ . '/auth.php';

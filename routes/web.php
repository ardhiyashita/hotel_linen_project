<?php

use App\Models\LinenType;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LinenController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinenTypeController;
use App\Http\Controllers\LinenCenterController;
use App\Http\Controllers\LaundryPlantController;
use App\Http\Controllers\LinenCategoryController;
use App\Http\Controllers\RegisterLinenController;
use App\Http\Controllers\CheckLinenStatusController;
use App\Http\Controllers\HotelTransactionController;
use App\Http\Controllers\InternalTransactionController;
use App\Http\Controllers\PackingController;
use App\Http\Controllers\RoleUserController;
use App\Http\Controllers\UserController;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/coba', [CobaController::class, 'coba']);
    Route::get('/', [DashboardController::class, 'index'])->name('home');


    Route::controller(LinenCategoryController::class)->group(function () {
        Route::get('/linen_category_index', 'index')->name('linen_category_index');
        Route::get('/linen_category_create', 'create')->name('linen_category_create');
        Route::post('/linen_category_create_save', 'create_save')->name('linen_category_create_save');
        Route::get('/linen_category_read/{id}', 'read')->name('linen_category_read');
        Route::get('/linen_category_update/{id}', 'update')->name('linen_category_update');
        Route::post('/linen_category_update_save/{id}', 'update_save')->name('linen_category_update_save');
        Route::post('/linen_category_delete/{id}', 'delete')->name('linen_category_delete');
    });

    Route::controller(LinenTypeController::class)->group(function () {
        Route::get('/linen_type_index', 'index')->name('linen_type_index');
        Route::get('/linen_type_create', 'create')->name('linen_type_create');
        Route::post('/linen_type_create_save', 'create_save')->name('linen_type_create_save');
        Route::get('/linen_type_read/{id}', 'read')->name('linen_type_read');
        Route::get('/linen_type_update/{id}', 'update')->name('linen_type_update');
        Route::post('/linen_type_update_save/{id}', 'update_save')->name('linen_type_update_save');
        Route::post('/linen_type_delete/{id}', 'delete')->name('linen_type_delete');
    });

    Route::controller(TemplateController::class)->group(function () {
        Route::get('/template_index', 'index')->name('template_index');
        Route::get('/template_create', 'create')->name('template_create');
        Route::post('/template_create_save', 'create_save')->name('template_create_save');
        Route::get('/template_read/{id}', 'read')->name('template_read');
        Route::get('/template_update/{id}', 'update')->name('template_update');
        Route::post('/template_update_save/{id}', 'update_save')->name('template_update_save');
        Route::post('/template_delete/{id}', 'delete')->name('template_delete');
    });

    Route::controller(LinenController::class)->group(function () {
        Route::get('/linen_index', 'index')->name('linen_index');
        Route::get('/linen_create', 'create')->name('linen_create');
        Route::post('/linen_create_save', 'create_save')->name('linen_create_save');
        Route::get('/linen_read/{id}', 'read')->name('linen_read');
        Route::get('/linen_update/{id}', 'update')->name('linen_update');
        Route::post('/linen_update_save/{id}', 'update_save')->name('linen_update_save');
        Route::post('/linen_delete/{id}', 'delete')->name('linen_delete');
    });

    Route::controller(CheckLinenStatusController::class)->group(function () {
        Route::get('/check_linen_status_index', 'index')->name('check_linen_status_index');
        Route::get('/check_linen_status_create', 'create')->name('check_linen_status_create');
        Route::post('/check_linen_status_create_save', 'create_save')->name('check_linen_status_create_save');
        Route::get('/check_linen_status_read/{id}', 'read')->name('check_linen_status_read');
    });

    Route::controller(InternalTransactionController::class)->group(function () {
        Route::get('/internal_transaction_index', 'index')->name('internal_transaction_index');
        Route::get('/internal_transaction_create', 'create')->name('internal_transaction_create');
        Route::post('/internal_transaction_create_save', 'create_save')->name('internal_transaction_create_save');
        Route::get('/internal_transaction_read/{id}', 'read')->name('internal_transaction_read');
        Route::get('/internal_transaction_update/{id}', 'update')->name('internal_transaction_update');
        Route::post('/internal_transaction_update_save/{id}', 'update_save')->name('internal_transaction_update_save');
        Route::post('/internal_transaction_delete/{id}', 'delete')->name('internal_transaction_delete');
    });

    Route::controller(LaundryPlantController::class)->group(function () {
        Route::get('/laundry_plant_index', 'index')->name('laundry_plant_index');
        Route::get('/laundry_plant_create', 'create')->name('laundry_plant_create');
        Route::post('/laundry_plant_create_save', 'create_save')->name('laundry_plant_create_save');
        Route::get('/laundry_plant_read/{id}', 'read')->name('laundry_plant_read');
        Route::get('/laundry_plant_update/{id}', 'update')->name('laundry_plant_update');
        Route::post('/laundry_plant_update_save/{id}', 'update_save')->name('laundry_plant_update_save');
        Route::post('/laundry_plant_delete/{id}', 'delete')->name('laundry_plant_delete');
    });

    Route::controller(LinenCenterController::class)->group(function () {
        Route::get('/linen_center_index', 'index')->name('linen_center_index');
        Route::get('/linen_center_create', 'create')->name('linen_center_create');
        Route::post('/linen_center_create_save', 'create_save')->name('linen_center_create_save');
        Route::get('/linen_center_read/{id}', 'read')->name('linen_center_read');
        Route::get('/linen_center_update/{id}', 'update')->name('linen_center_update');
        Route::post('/linen_center_update_save/{id}', 'update_save')->name('linen_center_update_save');
        Route::post('/linen_center_delete/{id}', 'delete')->name('linen_center_delete');
    });

    Route::controller(DriverController::class)->group(function () {
        Route::get('/driver_index', 'index')->name('driver_index');
        Route::get('/driver_create', 'create')->name('driver_create');
        Route::post('/driver_create_save', 'create_save')->name('driver_create_save');
        Route::get('/driver_read/{id}', 'read')->name('driver_read');
        Route::get('/driver_update/{id}', 'update')->name('driver_update');
        Route::post('/driver_update_save/{id}', 'update_save')->name('driver_update_save');
        Route::post('/driver_delete/{id}', 'delete')->name('driver_delete');
    });

    Route::controller(HotelController::class)->group(function () {
        Route::get('/hotel_index', 'index')->name('hotel_index');
        Route::get('/hotel_create', 'create')->name('hotel_create');
        Route::post('/hotel_create_save', 'create_save')->name('hotel_create_save');
        Route::get('/hotel_read/{id}', 'read')->name('hotel_read');
        Route::get('/hotel_update/{id}', 'update')->name('hotel_update');
        Route::post('/hotel_update_save/{id}', 'update_save')->name('hotel_update_save');
        Route::post('/hotel_delete/{id}', 'delete')->name('hotel_delete');
    });

    Route::controller(RegisterLinenController::class)->group(function () {
        Route::get('/register_linen_index', 'index')->name('register_linen_index');
        Route::get('/register_linen_create', 'create')->name('register_linen_create');
        Route::post('/register_linen_create_save', 'create_save')->name('register_linen_create_save');
        Route::get('/register_linen_read/{id}', 'read')->name('register_linen_read');
        Route::get('/register_linen_update/{id}', 'update')->name('register_linen_update');
        Route::post('/register_linen_update_save/{id}', 'update_save')->name('register_linen_update_save');
        Route::post('/register_linen_delete/{id}', 'delete')->name('register_linen_delete');
    });

    Route::controller(HotelTransactionController::class)->group(function () {
        Route::get('/hotel_transaction_index', 'index')->name('hotel_transaction_index');
        Route::get('/hotel_transaction_create', 'create')->name('hotel_transaction_create');
        Route::post('/hotel_transaction_create_save', 'create_save')->name('hotel_transaction_create_save');
        Route::get('/hotel_transaction_read/{id}', 'read')->name('hotel_transaction_read');
        Route::get('/hotel_transaction_update/{id}', 'update')->name('hotel_transaction_update');
        Route::post('/hotel_transaction_update_save/{id}', 'update_save')->name('hotel_transaction_update_save');
        Route::post('/hotel_transaction_delete/{id}', 'delete')->name('hotel_transaction_delete');
    });

    Route::controller(SupplierController::class)->group(function () {
        Route::get('/supplier_index', 'index')->name('supplier_index');
        Route::get('/supplier_create', 'create')->name('supplier_create');
        Route::post('/supplier_create_save', 'create_save')->name('supplier_create_save');
        Route::get('/supplier_read/{id}', 'read')->name('supplier_read');
        Route::get('/supplier_update/{id}', 'update')->name('supplier_update');
        Route::post('/supplier_update_save/{id}', 'update_save')->name('supplier_update_save');
        Route::post('/supplier_delete/{id}', 'delete')->name('supplier_delete');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/user_index', 'index')->name('user_index');
        Route::get('/user_create', 'create')->name('user_create');
        Route::post('/user_create_save', 'create_save')->name('user_create_save');
        Route::get('/user_read/{id}', 'read')->name('user_read');
        Route::get('/user_update/{id}', 'update')->name('user_update');
        Route::post('/user_update_save/{id}', 'update_save')->name('user_update_save');
        Route::post('/user_delete/{id}', 'delete')->name('user_delete');
    });

    Route::controller(RoleUserController::class)->group(function () {
        Route::get('/role_user_index', 'index')->name('role_user_index');
        Route::get('/role_user_create', 'create')->name('role_user_create');
        Route::post('/role_user_create_save', 'create_save')->name('role_user_create_save');
        Route::get('/role_user_read/{id}', 'read')->name('role_user_read');
        Route::get('/role_user_update/{id}', 'update')->name('role_user_update');
        Route::post('/role_user_update_save/{id}', 'update_save')->name('role_user_update_save');
        Route::post('/role_user_delete/{id}', 'delete')->name('role_user_delete');
    });

    Route::controller(PackingController::class)->group(function () {
        Route::get('/packing_index', 'index')->name('packing_index');
        Route::get('/packing_create', 'create')->name('packing_create');
        Route::post('/packing_create_save', 'create_save')->name('packing_create_save');
        Route::get('/packing_read/{id}', 'read')->name('packing_read');
        Route::get('/packing_update/{id}', 'update')->name('packing_update');
        Route::post('/packing_update_save/{id}', 'update_save')->name('packing_update_save');
        Route::post('/packing_delete/{id}', 'delete')->name('packing_delete');
    });
});

require __DIR__ . '/auth.php';

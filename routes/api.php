<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\FormController;
use App\Http\Controllers\API\KategoriLinenApi;
use App\Http\Controllers\API\LaundryPlantApi;
use App\Http\Controllers\API\Template;
use App\Http\Controllers\API\TemplateApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// 

Route::get('linen', [TemplateApi::class, 'get']);
Route::post('linen/insert', [TemplateApi::class, 'insert']);


Route::prefix('kategori')->group(function () {
    Route::get('linen', [KategoriLinenApi::class, 'get']);
});

Route::prefix('laundry_plant')->group(function () {
    Route::get('index', [LaundryPlantApi::class, 'get']);
});


// - get kategori,
// - get linen center,
// - get laundry plant


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/form', [FormController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::post('/login', [AuthController::class, 'login']);

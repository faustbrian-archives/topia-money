<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowAssetController;
use App\Http\Controllers\ListAssetsController;
use App\Http\Controllers\ShowServiceController;
use App\Http\Controllers\ListServicesController;
use App\Http\Controllers\ServiceAssetsController;
use App\Http\Controllers\ShowRateByAssetController;
use App\Http\Controllers\ShowRateBySymbolController;
use App\Http\Controllers\ShowRatesByAssetController;
use App\Http\Controllers\ShowRatesBySymbolController;
use App\Http\Controllers\ShowSymbolByServiceController;
use App\Http\Controllers\ShowSymbolsByServiceController;

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

// Services
Route::get('/services', ListServicesController::class);
Route::get('/services/{service}', ShowServiceController::class);
Route::get('/services/{service}/symbols', ShowSymbolsByServiceController::class);
Route::get('/services/{service}/symbols/{symbol}', ShowSymbolByServiceController::class);
Route::get('/services/{service}/symbols/{symbol}/rates', ShowRatesBySymbolController::class);
Route::get('/services/{service}/symbols/{symbol}/rates/{rate}', ShowRateBySymbolController::class);

// Assets
Route::get('/assets', ListAssetsController::class);
Route::get('/assets/{asset}', ShowAssetController::class);
Route::get('/assets/{asset}/rates', ShowRatesByAssetController::class);
Route::get('/assets/{asset}/rates/{rate}', ShowRateByAssetController::class);

// Conversion
Route::get('/convert/{source}/{target}', ServiceAssetsController::class);

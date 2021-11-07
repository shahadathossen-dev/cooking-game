<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('data/post', [App\Http\Controllers\CraniofacialCleftBabyController::class, 'save'])->name('research.save-data');
// Route::post('validate/email', [App\Http\Controllers\CraniofacialCleftBabyController::class, 'checkEmail'])->name('data.check-email');


Route::get('woodchop/wc3a/configs', [App\Http\Controllers\WoodChop\WC3A\ConfigController::class, 'getConfig'])->name('woodchop.wc3a.configs.getConfig');

Route::get('woodchop/wc3a/configs/test', [App\Http\Controllers\WoodChop\WC3A\ConfigController::class, 'getConfigForTest'])->name('woodchop.wc3a.configs.getConfigForTest');

Route::post('woodchop/wc3a/configs', [App\Http\Controllers\WoodChop\WC3A\ConfigController::class, 'store'])->name('woodchop.wc3a.configs.store-api');

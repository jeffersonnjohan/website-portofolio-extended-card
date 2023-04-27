<?php

use App\Http\Controllers\AcademicController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RestaurantController;
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

Route::get('/', [IntroductionController::class, 'index']);

Route::prefix('/academic')->group(function(){
    Route::get('/sd', [AcademicController::class, 'sd']);
    Route::get('/smp', [AcademicController::class, 'smp']);
    Route::get('/sma', [AcademicController::class, 'sma']);
    Route::get('/kuliah', [AcademicController::class, 'kuliah']);
    Route::get('/', [AcademicController::class, 'sd']);
});

Route::prefix('/organization')->group(function(){
    Route::get('/bgc', [OrganizationController::class, 'bgc']);
    Route::get('/signal', [OrganizationController::class, 'signal']);
    Route::get('/spark', [OrganizationController::class, 'spark']);
    Route::get('/yap', [OrganizationController::class, 'yap']);
    Route::get('/', [OrganizationController::class, 'bgc']);
});

Route::get('/hobby', [HobbyController::class, 'index']);

Route::get('/project', [ProjectController::class, 'index']);

Route::get('/restaurant', [RestaurantController ::class, 'index']);

// Fallback for unrecognize link
Route::fallback(function () {
    return redirect('/'); 
});

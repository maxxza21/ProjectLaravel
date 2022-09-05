<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnipostController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\InformationController;

// page route

Route::get('Anipost/upload', [UploadController::class, 'upload'])->name('uploads');
Route::get('Anipost/information', [InformationController::class, 'data']);
// Route::get('Anipost/information', [InformationController::class, 'delete']);

Route::post('Anipost/upload', [UploadController::class, 'addmanga']);
Route::resource('Anipost', AnipostController::class);

// edit
Route::get('Anipost/edit/{id}', [InformationController::class, 'edit']);

//update
Route::put('Anipost/update/{id}', [InformationController::class, 'update']);

// delete route
Route::get('Anipost/delete/{id}', [InformationController::class, 'delete']);

// check information
Route::get('test', [AnipostController::class, 'check']);
Route::get('test', [UploadController::class, 'addmanga']);

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
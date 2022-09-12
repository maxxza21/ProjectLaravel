<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnipostController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AnimedetailController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\InformationSearchController;

// page route

Route::get('Anipost/upload', [UploadController::class, 'upload'])->name('uploads');
Route::get('Anipost/information', [InformationController::class, 'data']);
// Route::get('Anipost/information', [InformationController::class, 'delete']);
Route::get('Anipost/contact', [AnipostController::class, 'contact']);
Route::post('Anipost/upload', [UploadController::class, 'addmanga']);
Route::get('Anipost/uploadinformation', [UploadController::class, 'infor'])->name('information');
Route::get('Anipost/comic/{id}', [AnimedetailController::class, 'detail'])->name('Anipost.show');
Route::get('Anipost/comic/{id}', [AnimedetailController::class, 'title']);
Route::get('Anipost/search', [AnimedetailController::class, 'searchpage']);
Route::resource('Anipost', AnipostController::class);

// edit
Route::get('Anipost/edit/{id}', [InformationController::class, 'edit']);

//update
Route::put('Anipost/update/{id}', [InformationController::class, 'update']);

// search
Route::get('Anipost/search', [AnipostController::class, 'search'])->name('web.search');
Route::get('Anipost/information', [InformationController::class, 'search2'])->name('information.search');


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
Route::get('/', [AnipostController::class, 'redirect']);
// Route::get('/Anipost', function () {
//     return view('Anipost');
// });
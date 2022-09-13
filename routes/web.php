<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnipostController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AnimedetailController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\InformationSearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;


// page route

Route::get('Anipost/upload', [UploadController::class, 'upload'])->name('uploads')->middleware('is_admin');
// Route::get('Anipost/information', [InformationController::class, 'delete']);
Route::get('Anipost/contact', [AnipostController::class, 'contact']);
Route::post('Anipost/upload', [UploadController::class, 'addmanga'])->middleware('is_admin');
// Route::get('Anipost/uploadinformation', [UploadController::class, 'infor'])->name('information')->middleware('is_admin');
Route::get('Anipost/comic/{id}', [AnimedetailController::class, 'detail'])->name('Anipost.show');
Route::get('Anipost/comic/{id}', [AnimedetailController::class, 'title']);
Route::get('Anipost/search', [AnimedetailController::class, 'searchpage']);
// Route::get('Anipost/user', [AnipostController::class, 'userindex']);
Route::get('Anipost/admin', [AnipostController::class, 'user'])->middleware('is_admin');
Route::get('Anipost/information', [InformationController::class, 'show'])->middleware('is_admin');
Route::get('Anipost/admin', [InformationController::class, 'adminpage'])->name('adminpage')->middleware('is_admin');
Route::resource('Anipost', AnipostController::class);


//data
Route::get('Anipost/information', [InformationController::class, 'data'])->middleware('is_admin');
Route::get('Anipost/admin', [AnipostController::class, 'user'])->middleware('is_admin');

// edit
Route::get('Anipost/edit/{id}', [InformationController::class, 'edit'])->middleware('is_admin');

//update
Route::put('Anipost/update/{id}', [InformationController::class, 'update'])->middleware('is_admin');

// search
Route::get('Anipost/search', [AnipostController::class, 'search'])->name('web.search');
Route::get('Anipost/information', [InformationController::class, 'search2'])->name('information.search')->middleware('is_admin');


// delete route
Route::get('Anipost/delete/{id}', [InformationController::class, 'delete'])->middleware('is_admin');


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
Auth::routes();

//login and registor



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('Anipost/admin', [AnipostController::class, 'usercheck'])->middleware('is_admin');

<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PhotoController;

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

Route::prefix('auth')->group(function(){
    Route::post('/check',[MainController::class, 'check'])->name('auth.check');
    Route::get('/logout',[MainController::class, 'logout'])->name('auth.logout');
    Route::get('/login',[MainController::class, 'login'])->name('auth.login');
});

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/photos',[AdminController::class, 'photos'])->name('admin.photos');
        Route::get('/upload_photos',[PhotoController::class, 'upload_photos'])->name('admin.upload_photos');
        Route::post('/uploadphotos', [PhotoController::class, 'uploadphotos'])->name('admin.uploadphotos');
        Route::get('/delete/{id}', [PhotoController::class, 'delete'])->name('admin.delete_photos');
    });
});
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

Route::get('/', [MainController::class, 'index'])->name('index');

Route::prefix('auth')->group(function(){
    Route::post('/check',[MainController::class, 'check'])->name('auth.check');
    Route::get('/logout',[MainController::class, 'logout'])->name('auth.logout');
    Route::get('/login',[MainController::class, 'login'])->name('auth.login');
});

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/photos',[AdminController::class, 'photos'])->name('admin.photos');
        Route::get('/news',[AdminController::class, 'news'])->name('admin.news');
        Route::get('/admin',[AdminController::class, 'admin'])->name('admin.admin');
        Route::get('/link',[AdminController::class, 'link'])->name('admin.link');
        Route::get('/upload_photos',[PhotoController::class, 'upload_photos'])->name('admin.upload_photos');
        Route::post('/uploadphotos', [PhotoController::class, 'uploadphotos'])->name('admin.uploadphotos');
        Route::get('/upload_admin',[PhotoController::class, 'upload_admin'])->name('admin.upload_admin');
        Route::post('/uploadadmin', [PhotoController::class, 'uploadadmin'])->name('admin.uploadadmin');
        Route::get('/admin_edit/{id}',[PhotoController::class, 'admin_edit'])->name('admin.admin_edit');
        Route::post('/adminedit', [PhotoController::class, 'adminedit'])->name('admin.adminedit');
        Route::get('/upload_news',[PhotoController::class, 'upload_news'])->name('admin.upload_news');
        Route::post('/uploadnews', [PhotoController::class, 'uploadnews'])->name('admin.uploadnews');
        Route::get('/upload_link',[PhotoController::class, 'upload_link'])->name('admin.upload_link');
        Route::post('/uploadlink', [PhotoController::class, 'uploadlink'])->name('admin.uploadlink');
        Route::get('/delete/photos/{id}', [PhotoController::class, 'deletephotos'])->name('admin.delete_photos');
        Route::get('/delete/admin/{id}', [PhotoController::class, 'deleteadmin'])->name('admin.delete_admin');
        Route::get('/delete/captions/{id}', [PhotoController::class, 'deletecaptions'])->name('admin.delete_captions');
    });
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/business', [HomeController::class, 'business'])->name('business');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/news/{id}', [HomeController::class, 'newsDetail'])->name('news-detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'storeMessage'])->name('contact.store');
Route::get('/awards', [HomeController::class, 'awards'])->name('awards');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/travel-promos', [HomeController::class, 'travelPromos'])->name('travel-promos');

// Admin Routes
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // News Management
    Route::get('/news', [AdminController::class, 'newsIndex'])->name('news.index');
    Route::get('/news/create', [AdminController::class, 'newsCreate'])->name('news.create');
    Route::post('/news', [AdminController::class, 'newsStore'])->name('news.store');
    Route::get('/news/{news}/edit', [AdminController::class, 'newsEdit'])->name('news.edit');
    Route::put('/news/{news}', [AdminController::class, 'newsUpdate'])->name('news.update');
    Route::delete('/news/{news}', [AdminController::class, 'newsDestroy'])->name('news.destroy');

    // Business Management
    Route::get('/business', [AdminController::class, 'businessIndex'])->name('business.index');
    Route::get('/business/create', [AdminController::class, 'businessCreate'])->name('business.create');
    Route::post('/business', [AdminController::class, 'businessStore'])->name('business.store');
    Route::get('/business/{business}/edit', [AdminController::class, 'businessEdit'])->name('business.edit');
    Route::put('/business/{business}', [AdminController::class, 'businessUpdate'])->name('business.update');
    Route::delete('/business/{business}', [AdminController::class, 'businessDestroy'])->name('business.destroy');

    // Messages Management
    Route::get('/messages', [AdminController::class, 'messagesIndex'])->name('messages.index');
    Route::get('/messages/{message}', [AdminController::class, 'messageShow'])->name('messages.show');
    Route::delete('/messages/{message}', [AdminController::class, 'messageDestroy'])->name('messages.destroy');

    // Team Management
    Route::resource('team', \App\Http\Controllers\Admin\TeamController::class);
});

<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::resource('/blog', BlogController::class);
    Route::resource('/video', VideoController::class);
    Route::resource('/category', BlogCategoryController::class);


});

Route::get('/blog', [BlogController::class,'index']);
Route::get('/blog/{$slug}', [BlogController::class,'show']);

Route::get('/video', [VideoController::class,'index']);
Route::get('/video/{$slug}', [VideoController::class,'show']);

Route::get('/category', [BlogCategoryController::class,'index']);
Route::get('/category/{$slug}', [BlogCategoryController::class,'show']);


Route::post('/subscribe', [\App\Http\Controllers\SubscriberController::class,'store'])->name('subscribe');
Route::get('/language/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');

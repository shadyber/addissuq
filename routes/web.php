<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $blogs=\App\Models\Blog::lastN(12);
    return view('welcome')->with(['blogs'=>$blogs]);
});
Route::get('/blogitem', [BlogController::class,'index']);
Route::get('/blogitem/{$slug}', [BlogController::class,'show']);

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


Route::get('/video', [VideoController::class,'index']);
Route::get('/video/{$slug}', [VideoController::class,'show']);

Route::get('/category', [BlogCategoryController::class,'index']);
Route::get('/category/{slug}', [BlogCategoryController::class,'show']);


Route::get('/search',[SearchController::class,'search'])->name('search');

Route::post('/subscribe', [\App\Http\Controllers\SubscriberController::class,'store'])->name('subscribe');
Route::get('/language/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');

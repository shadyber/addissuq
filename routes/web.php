<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

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




});

Route::get('/sitemapgenerator',function() {
SitemapGenerator::create('https://addissuq.com')
    ->getSitemap()
    // here we add one extra link, but you can add as many as you'd like
    ->add(Url::create('/extra-page')->setPriority(0.5)->addAlternate('/extra-pagina', 'nl'))
    ->writeToFile(public_path('sitemap.xml'));

});


Route::get('/sitemap/generate', function() {

    \Artisan::call('sitemap:generate');

    return 'Sitemap Generated to Public directory ! <br>  https://shegerstor.com/sitemap.xml';
});

Route::resource('/blog', BlogController::class);
Route::resource('/video', VideoController::class);
Route::resource('/category', BlogCategoryController::class);

Route::get('/search',[SearchController::class,'search'])->name('search');

Route::post('/subscribe', [\App\Http\Controllers\SubscriberController::class,'store'])->name('subscribe');
Route::get('/language/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');

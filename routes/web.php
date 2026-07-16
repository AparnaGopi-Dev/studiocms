<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StoryController as AdminStoryController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\StoryController as PublicStoryController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/stories', [PublicStoryController::class, 'publicIndex'])
    ->name('stories.index');

Route::get('/stories/{id}', [PublicStoryController::class, 'publicShow'])
    ->name('stories.show');


 /*Portfolio ROUTES*/

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
})->name('portfolio.index');


Route::get('/portfolio/{slug}', function ($slug) {
    return view('frontend.portfolio-show', [
        'slug' => $slug
    ]);
})->name('portfolio.show');

 /*Book a session ROUTES*/

Route::get('/book-session', function () {
    return view('frontend.booking');
})->name('booking');

/*About page ROUTES*/
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

/*Contact page ROUTES*/
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

/*Gallery page ROUTES*/
Route::get('/gallery', function () {
    return view('frontend.gallery');
})->name('gallery');

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Stories CRUD
    Route::resource('stories', AdminStoryController::class);

    // Gallery Upload
    Route::post('/stories/{story}/photos', [PhotoController::class, 'store'])
        ->name('photos.store');

    // Gallery Delete
    Route::delete('/photos/{photo}', [PhotoController::class, 'destroy'])
        ->name('photos.destroy');

});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// HOMEPAGE
Route::get('/', function () {
    return view('welcome');
});

// SERVICES PAGE
Route::get('/services', [ServicesController::class, 'service'])->name('services');
Route::get('/services/lovely_decoration', [ServicesController::class, 'lovelydecoration'])->name('decoration');
Route::get('/services/seating', [ServicesController::class, 'seating'])->name('seating');
Route::get('/services/music_dj', [ServicesController::class, 'music'])->name('music');
Route::get('/services/dinner_drinks', [ServicesController::class, 'food'])->name('food');
Route::get('/services/costume', [ServicesController::class, 'costume'])->name('costume');

// PORTFOLIO PAGE
Route::get('/portfolio/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/wedding-bells', [PortfolioController::class, 'wedding'])->name('wedding-bells');
Route::get('/portfolio/photo-memories', [PortfolioController::class, 'photo'])->name('photos');
Route::get('/portfolio/bride-groom', [PortfolioController::class, 'bridegroom'])->name('bridegroom');
Route::get('/portfolio/engagement', [PortfolioController::class, 'engagement'])->name('engagement');
Route::get('/portfolio/vows', [PortfolioController::class, 'vows'])->name('vows');
Route::get('/portfolio/florist', [PortfolioController::class, 'florist'])->name('florist');

// ABOUT US PAGE
Route::get('about-us', [AboutController::class, 'about'])->name('about-us');



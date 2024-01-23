<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MessageController;




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

// CONTACT US PAGE
Route::get('contact-us', [ContactController::class, 'contact'])->name('contact-us');

// ADMIN
Route::get('admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/register', [AdminController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// BOOKINGS
Route::post('/submit-booking', [BookingController::class, 'store'])->name('submit.booking');
Route::get('/admin/bookings', [BookingController::class, 'index'])->name('admin.bookings');
Route::get('/booking/{id}/mark-as-fully-paid', [BookingController::class, 'markAsFullyPaid'])->name('booking.markAsFullyPaid');
Route::get('/booking/{id}/mark-as-paid-deposit', [BookingController::class, 'markAsPaidDeposit'])->name('booking.markAsPaidDeposit');
Route::get('/booking/{id}/mark-as-completed', [BookingController::class, 'markAsCompleted'])->name('booking.markAsCompleted');
Route::get('/booking/{id}/mark-as-in-progress', [BookingController::class, 'markAsInProgress'])->name('booking.markAsInProgress');
Route::get('/booking/{id}/cancel-service', [BookingController::class, 'cancelService'])->name('booking.cancelService');
Route::get('/booking/{id}/delete', [BookingController::class, 'delete'])->name('booking.delete');

// CLIENTS
Route::get('/admin/clients', [ClientController::class, 'index'])->name('admin.clients');
Route::get('/client/{id}/delete', [ClientController::class, 'delete'])->name('client.delete');

// Messages
Route::get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages');
Route::get('/message/{id}/delete', [MessageController::class, 'delete'])->name('message.delete');

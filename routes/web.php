<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\VenueImageController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ArtistImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin.index');
})->name('admin');

//Route::get('/admin', function () {
//    return view('admin.index');
//})->middleware(['auth'])->name('admin');



//Route::get('/', function () {
//    return view('frontend.index');
//});
//Route::get('/', 'HomeController@index')->name('home');
//Route::get('/', 'HomeController@index');
//Route::get('/', [HomeController::class, 'index']);

//Frontend
Route::resource('/',HomeController::class);
Route::resource('home',HomeController::class);
Route::get('home/showevent/{id}', [HomeController::class, 'showevent'])->name('home.showevent');
Route::get('home/showartist/{id}', [HomeController::class, 'showartist'])->name('home.showartist');
Route::get('home/booktickets/{id}', [HomeController::class, 'booktickets'])->name('home.booktickets');
Route::view('/search-events', 'frontend.search-events');
Route::view('/search-artists', 'frontend.search-artists');



//Route::get('/', function () {
//    return ('admin')->middleware(['auth']);
//});

//Backend
Route::resource('booking',BookingController::class)->middleware(['auth']);
Route::resource('venue',VenueController::class)->middleware(['auth']);
Route::resource('artist',ArtistController::class)->middleware(['auth']);
Route::resource('event',EventController::class)->middleware(['auth']);
Route::resource('genre',GenreController::class)->middleware(['auth']);
Route::resource('artistimage', ArtistImageController::class)->middleware(['auth']);
Route::resource('venueimage', VenueImageController::class)->middleware(['auth']);
Route::view('/event-search', 'event.event-search')->middleware(['auth']);
Route::view('/artist-search', 'artist.artist-search')->middleware(['auth']);
Route::view('/customer-lastname-search', 'customer.customer-lastname-search')->middleware(['auth']);

Route::resource('customer',CustomerController::class)->middleware(['auth']);
Route::resource('vehicle',VehicleController::class)->middleware(['auth']);
Route::resource('service',ServiceController::class)->middleware(['auth']);



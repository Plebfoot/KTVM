<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


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

// Normal Routes //
Route::get('/', function () { return view('pages/welcome'); });
Route::get('/contact', function () { return view('pages/contact'); });
Route::get('/bestuur', function () { return view('about/het-bestuur'); });
Route::get('/het-harmonieorkest', function () { return view('about/harmonieorkest'); });
Route::get('/onze-historie', function () { return view('about/onze-historie'); });

// Controller Routes 
Route::get('/', [EventController::class, 'index']);

/* Auth Routes */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Nieuws Routes with Autentication. //
Route::prefix('nieuws')->middleware(['auth'])->group(function () {
    Route::get('/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/nieuw', [NewsController::class, 'store'])->name('news.store');
});

// Nieuws Routes
Route::get('/nieuws', [NewsController::class, 'index'])->name('pages.news.index');
Route::get('/nieuws/{slug}', [NewsController::class, 'show'])->name('news.show');
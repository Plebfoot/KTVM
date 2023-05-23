<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use PHPUnit\TextUI\Configuration\Group;


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
Route::get('/contact', function () { return view('pages/contact'); })->name('pages.contact');
Route::get('/bestuur', function () { return view('about/het-bestuur'); });
Route::get('/het-harmonieorkest', function () { return view('about/harmonieorkest'); });
Route::get('/onze-historie', function () { return view('about/onze-historie'); });
Route::get('/concertagenda', function () { return view('pages/events/index'); });

// Controller Routes 

Route::get('/', [EventController::class, 'welcome']);
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');


/* Auth Routes */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Event Routes with Authentication. 

Route::prefix('concertagenda')->middleware(['auth'])->group(function () {
    Route::get('/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/nieuw', [EventController::class, 'store'])->name('events.store');
});

Route::get('/concertagenda', [EventController::class, 'filter'])->name('pages.events.index');
Route::get('/concertagenda/{slug}', [EventController::class, 'show'])->name('event.show');


// Nieuws Routes with Autentication. //
Route::prefix('nieuws')->middleware(['auth'])->group(function () {
    Route::get('/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/nieuw', [NewsController::class, 'store'])->name('news.store');
    Route::delete('/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    Route::put('/{id}', [NewsController::class, 'update'])->name('news.update');
});

// Nieuws Routes
Route::get('/nieuws', [NewsController::class, 'index'])->name('pages.news.index');
Route::get('/nieuws/{slug}', [NewsController::class, 'show'])->name('news.show');


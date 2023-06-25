<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;

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

Route::get('/', function () {
    return view('frontend.index');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'HomeAbout')->name('home.about');
});

Route::controller(PortfolioController::class)->group(function () {
    Route::get('/portfolio', 'HomePortfolio')->name('home.portfolio');
    Route::get('/details/portfolio/{id}', 'DetailsPortfolio')->name('details.portfolio');
});

Route::controller(TeamController::class)->group(function () {
    Route::get('/team', 'HomeTeam')->name('home.team');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'HomeBlog')->name('home.blog');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'HomeContact')->name('home.contact');
});

Route::controller(ServicesController::class)->group(function () {
    Route::get('/service', 'HomeServices')->name('home.service');
    Route::get('/services/web-development', 'HomeWebDevelopment')->name('home.web_development');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

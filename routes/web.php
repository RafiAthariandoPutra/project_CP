<?php

use App\Http\Controllers\FAQController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonalController;
use App\Http\Controllers\TrustedCompanyController;
use App\Models\FAQ;
use App\Models\Hero;
use App\Models\Service;
use App\Models\TrustedCompany;
use Illuminate\Support\Facades\Route;




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

    $trustedCompanies = TrustedCompany::get();
    $hero = Hero::first();
    $services = Service::get();
    $faqs = FAQ::get();


    return view('home', compact('trustedCompanies', 'hero', 'services', 'faqs'));
});


Route::get('/dashboard', function () {
    return view('Admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/dashboard/trustedcompany', TrustedCompanyController::class)->except(['show']);
    Route::resource('/dashboard/service', ServiceController::class)->except('show');
    Route::resource('/dashboard/herosection', HeroController::class)->except('show');
    Route::resource('/dashboard/team', TeamController::class)->except('show');
    Route::resource('/dashboard/testimonal', TestimonalController::class)->except('show');
    Route::resource('/dashboard/faq', FAQController::class)->except('show');
    Route::resource('/dashboard/project', ProjectController::class)->except('show');
});

rafi kocak

require __DIR__ . '/auth.php';

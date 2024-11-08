<?php

use App\Models\FAQ;
use App\Models\Hero;
use App\Models\Team;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonal;
use App\Models\TrustedCompany;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TestimonalController;
use App\Http\Controllers\TrustedCompanyController;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

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
    $project = Project::get();
    $team = Team::get();
    $testimonal = Testimonal::get();


    return view('home', compact('trustedCompanies', 'hero', 'testimonal', 'team', 'project', 'services', 'faqs'));
});


Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact-send', [ContactController::class, 'store']);

Route::get('/project/{project:slug}', [ProjectController::class, 'show']);
Route::get('/team/{team:slug}', [TeamController::class, 'show']);


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name('dashboard');
    // CETAK DATA COMPANY PROFILE MENJADI PDF
    Route::get("/dashboard/cetak", [DashboardController::class, 'cetak'])->name('download.cetak');
});

Route::middleware(['auth', 'verified', 'projectAdmin'])->group(function () {
    Route::resource('/dashboard/project', ProjectController::class)->except('show');
    Route::resource('/dashboard/team', TeamController::class)->except('show');
    Route::resource('/dashboard/service', ServiceController::class)->except('show');
});

Route::middleware(['auth', 'verified', 'socialAdmin'])->group(function () {
    Route::resource('/dashboard/trustedcompany', TrustedCompanyController::class)->except(['show']);
    Route::resource('/dashboard/herosection', HeroController::class)->except('show');
    Route::resource('/dashboard/testimonal', TestimonalController::class)->except('show');
    Route::resource('/dashboard/faq', FAQController::class)->except('show');
});


Route::middleware(['auth', 'verified', 'superAdmin'])->group(function () {
    Route::resource('/dashboard/settings', SettingController::class)->except('show');
    Route::resource('/dashboard/trustedcompany', TrustedCompanyController::class)->except(['show']);
    Route::resource('/dashboard/herosection', HeroController::class)->except('show');
    Route::resource('/dashboard/testimonal', TestimonalController::class)->except('show');
    Route::resource('/dashboard/faq', FAQController::class)->except('show');
    Route::resource('/dashboard/project', ProjectController::class)->except('show');
    Route::resource('/dashboard/team', TeamController::class)->except('show');
    Route::resource('/dashboard/service', ServiceController::class)->except('show');
});




require __DIR__ . '/auth.php';

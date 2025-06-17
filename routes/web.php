<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\PageController;

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

// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Pages de records
Route::get('/records', [RecordController::class, 'categories'])->name('records');
Route::get('/records/{category}', [RecordController::class, 'category'])->name('records.category');
Route::get('/record/{slug}', [RecordController::class, 'show'])->name('records.show');

// Enregistrer un record
Route::get('/enregistrer', [RecordController::class, 'create'])->name('enregistrer');

// Page à propos
Route::get('/about', [PageController::class, 'about'])->name('about');

// Page FAQ
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

// Page Profile (nécessite une authentification)
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// Page Profile (nécessite une authentification)
Route::get('/mentionslegales', [PageController::class, 'legal'])->name('legal');

// Routes d'authentification
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route admin (nécessite d'être admin)
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(['auth', 'admin']);

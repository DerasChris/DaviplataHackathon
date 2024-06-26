<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\DaviuniAuthController;
use App\Http\Controllers\NegocioController;

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
    return view('auth.login');
});

Route::get('/daviuni', [PagosController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('daviuni');

    Route::get('/custom-login', [DaviuniAuthController::class, 'showLoginForm'])->name('custom.login');
    Route::post('/custom-login', [DaviuniAuthController::class, 'login'])->name('custom.login');
    Route::post('/custom-logout', [DaviuniAuthController::class, 'logout'])->name('custom.logout');
    
    Route::middleware('auth:custom')->group(function () {
        Route::get('/custom-dashboard', function () {
            return view('custom_dashboard'); // Crea esta vista según tus necesidades
        })->name('custom.dashboard');
    });
    

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/davinegocio', [NegocioController::class, 'index'])
    //->middleware(['auth', 'verified'])
    ->name('davinegocio');

require __DIR__.'/auth.php';


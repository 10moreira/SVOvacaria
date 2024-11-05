<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;


Route::get('/', function () {
    return Inertia::render('WelcomeLogin', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/users', function () {
    return Inertia::render('UserIndex');    
})->middleware(['auth'])->name('user.index');


Route::get('/solicitarviatura', function () {
    return Inertia::render('SolicitarViatura');    
})->middleware(['auth'])->name('solicitarviatura');

Route::get('/minhassolicitacoes', function () {
    return Inertia::render('MinhasSolicitacoes');    
})->middleware(['auth'])->name('minhassolicitacoes');

Route::get('/caronas', function () {
    return Inertia::render('Caronas');    
})->middleware(['auth'])->name('caronas');

Route::get('/admin', function () {
    return Inertia::render('Admin');    
})->middleware(['auth'])->name('admin');









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

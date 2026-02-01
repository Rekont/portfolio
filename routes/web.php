<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/services', [PortfolioController::class, 'services'])->name('services');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::post('/contact', [PortfolioController::class, 'store'])->name('contact.store');
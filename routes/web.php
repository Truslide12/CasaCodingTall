<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/{group}', [SiteController::class, 'group']);
Route::get('/', [SiteController::class, 'index']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/mhs', [SiteController::class, 'mhs']);
Route::get('/work', [SiteController::class, 'work']);
Route::get('/commingsoon', [SiteController::class, 'commingsoon']);
Route::get('/projects', [SiteController::class, 'projects']);
Route::get('/contact', [SiteController::class, 'contact']);
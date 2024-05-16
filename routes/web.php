<?php

use App\Http\Controllers\ActivitesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homepage'])->name('homepage');

Route::get('/activites', [ActivitesController::class, 'activites'])->name('activites');
Route::get('/activityDetails/{id}', [ActivitesController::class, 'activityDetails'])->name('activityDetails');
Route::get('/editActivity', [ActivitesController::class, 'editActivity'])->name('editActivity');
Route::get('/addActivity', [ActivitesController::class, 'addActivity'])->name('addActivity');
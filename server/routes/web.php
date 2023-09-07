<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use Inertia\Inertia;


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

Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::post('/events', [EventController::class, 'store'])->name('events.store');

Route::get('/events/create', function () {
    return Inertia::render('Create');
})->name('events.create');


// Route::get('/', [\App\Http\Controllers\EventController::class, "CreateEvent"]);
// Route::get('/modify', [\App\Http\Controllers\EventController::class, "ModifyEvent"]);
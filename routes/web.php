<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApointmentController;

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
    return view('welcome');
});

Route::get('/apointment', [ApointmentController::class, 'index'])->name('apointments.index');
Route::post('/apointment/store', [ApointmentController::class, 'store'])->name('apointments.store');
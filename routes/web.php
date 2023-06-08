<?php

use App\Http\Controllers\CardControler;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProfileController;
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
    return redirect()->route('login');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/v/{company}/{id}', [CardControler::class, 'show'])->name('card.show');

Route::middleware('auth')->group(function () {

    Route::resource('/card', CardControler::class)->except('show')->names('card');

    Route::post('/card/add/horarios', [CardControler::class, 'schedules'])->name('card.schedules');
    Route::resource('/companias', CompaniesController::class)->names('companies');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

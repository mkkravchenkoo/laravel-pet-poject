<?php

use App\Http\Controllers\AdminTeamController;
use App\Http\Controllers\MainMenuController;
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
    return view('home');
});

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('admin-home');
    })->name('admin.home');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');

    Route::get('/menu', [MainMenuController::class, 'edit'])->name('admin.menu.edit');
    Route::post('/menu', [MainMenuController::class, 'store'])->name('admin.menu.store');
    Route::patch('/menu', [MainMenuController::class, 'update'])->name('admin.menu.update');
    Route::delete('/menu/{id}', [MainMenuController::class, 'destroy'])->name('admin.menu.destroy');

    Route::get('/teams', [AdminTeamController::class, 'index'])->name('admin.team.index');
    Route::get('/teams/{team}/edit', [AdminTeamController::class, 'edit'])->name('admin.team.edit');

});

require __DIR__.'/auth.php';

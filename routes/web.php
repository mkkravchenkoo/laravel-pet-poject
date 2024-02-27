<?php

use App\Http\Controllers\AdminTeamController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SlideController;
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

Route::get('/', [HomeController::class, 'index']);

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
    Route::post('/teams', [AdminTeamController::class, 'store'])->name('admin.team.store');
    Route::get('/teams/create', [AdminTeamController::class, 'create'])->name('admin.team.create');
    Route::get('/teams/{team}/edit', [AdminTeamController::class, 'edit'])->name('admin.team.edit');
    Route::patch('/teams/{team}/edit', [AdminTeamController::class, 'update'])->name('admin.team.update');
    Route::delete('/teams/{team}', [AdminTeamController::class, 'destroy'])->name('admin.team.destroy');

    Route::resource('/slider', SlideController::class)->except('show');
    Route::resource('/service', ServiceController::class)->except('show');

    Route::get('/config', [ConfigController::class, 'index'])->name('admin.config.index');
    Route::patch('/config', [ConfigController::class, 'update'])->name('admin.config.update');

});

require __DIR__.'/auth.php';

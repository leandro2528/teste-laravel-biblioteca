<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TbGeneroController;
use App\Http\Controllers\DashboardController;


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
    return view('inicial.index');
});

Route::prefix('/generos')->group(function() {
    Route::get('/', [TbGeneroController::class, 'index'])->name('generos-index');
    Route::get('/create', [TbGeneroController::class, 'create'])->name('generos-create');
    Route::post('/', [TbGeneroController::class, 'store'])->name('generos-store');
    Route::get('/{id}edit', [TbGeneroController::class, 'edit'])->where('id', '[0-9]+')->name('generos-edit');
    Route::put('/{id}', [TbGeneroController::class, 'update'])->where('id', '[0-9]+')->name('generos-update');
    Route::delete('/{id}', [TbGeneroController::class, 'destroy'])->where('id', '[0-9]+')->name('generos-destroy');
});

Route::prefix('dashboards')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboards-index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

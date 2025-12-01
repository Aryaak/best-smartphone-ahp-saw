<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AHPController;

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

Route::get('/', [DashboardController::class, 'index'])->name('index');

Route::get('units', [UnitController::class, 'index'])->name('units.index');
Route::post('units', [UnitController::class, 'store'])->name('units.store');
Route::put('units/{uuid}', [UnitController::class, 'update'])->name('units.update');
Route::delete('units/{uuid}', [UnitController::class, 'destroy'])->name('units.destroy');

Route::get('criterias', [CriteriaController::class, 'index'])->name('criterias.index');
Route::post('criterias', [CriteriaController::class, 'store'])->name('criterias.store');
Route::put('criterias/{uuid}', [CriteriaController::class, 'update'])->name('criterias.update');
Route::delete('criterias/{uuid}', [CriteriaController::class, 'destroy'])->name('criterias.destroy');

Route::get('/ahp', [AhpController::class, 'index'])->name('ahp.index');
Route::post('/ahp', [AhpController::class, 'store'])->name('ahp.store');

Auth::routes();


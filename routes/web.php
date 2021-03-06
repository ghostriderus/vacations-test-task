<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VacationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[VacationController::class, 'index'])->middleware(['auth'])->name('home');

Route::get('/vacation',[VacationController::class, 'edit'])->middleware(['auth']);
Route::post('/vacation',[VacationController::class, 'update'])->middleware(['auth']);
Route::get('/vacation/{vid}/approve',[VacationController::class, 'approve'])->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

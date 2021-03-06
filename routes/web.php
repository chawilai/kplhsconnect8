<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('nakornping')->group(function () {
    Route::get('/', [PagesController::class, 'index']);
    Route::get('/dashboard', fn() => view('dashboard'))->middleware(['auth']);
    Route::get('/prep', fn() => view('welcome'))->middleware(['auth']);
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\TamuController;
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
    return view('pages.auth.login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('tamu', TamuController::class);

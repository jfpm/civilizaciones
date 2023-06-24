<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //modulos principales
    Route::get('/adoraciones_divinas', [DashboardController::class, 'adoraciones_divinas'])->name('adoraciones_divinas');
    Route::get('/curiosidades', [DashboardController::class, 'curiosidades'])->name('curiosidades');
    Route::get('/cultura', [DashboardController::class, 'cultura'])->name('cultura');
    Route::get('/terminos', [DashboardController::class, 'terminos'])->name('terminos');
});

Route::get('/usuarios', [AdminController::class, 'usuarios'])->name('usuarios');


Route::get('limpieza', function () {
    //$php = Artisan::call('up');
    $php  = Artisan::call('config:cache');
    $php1 = Artisan::call('view:clear');
    $php2 = Artisan::call('route:clear');
    //$php3 = Artisan::call('migrate');
    return Redirect::to('/');
});

Route::get('limpieza@db', function () {
    //$php = Artisan::call('up');
    $php  = Artisan::call('config:cache');
    $php1 = Artisan::call('view:clear');
    $php2 = Artisan::call('route:clear');
    $php3 = Artisan::call('migrate');
    $php4 = Artisan::call('seed');
    return Redirect::to('/');
});


require __DIR__ . '/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluacionModulosController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/usuarios', [AdminController::class, 'usuarios'])->name('usuarios');
    Route::post('/usuarios_delete/{id}', [AdminController::class, 'delete'])->name('usuario.delete');
    Route::get('/usuarios_editar/{id}', [AdminController::class, 'editar'])->name('usuario.editar');
    Route::post('update_usuarios/{id}', [AdminController::class, 'update'])->name('usuario.update');

    //modulos principales
    Route::get('/adoraciones_divinas', [DashboardController::class, 'adoraciones_divinas'])->name('adoraciones_divinas');
    Route::get('/curiosidades', [DashboardController::class, 'curiosidades'])->name('curiosidades');
    Route::get('/cultura', [DashboardController::class, 'cultura'])->name('cultura');

    //evaluaciones
    Route::get('/evaluacion_curiosidad', [EvaluacionModulosController::class, 'evaluacion_curiosidad'])->name('evaluacion_curiosidad');
    Route::post('/storeCuriosidad', [EvaluacionModulosController::class, 'storeCuriosidad'])->name('storeCuriosidad');
    Route::get('/evaluacion_cultura', [EvaluacionModulosController::class, 'evaluacion_cultura'])->name('evaluacion_cultura');
    Route::post('/storeCultura', [EvaluacionModulosController::class, 'storeCultura'])->name('storeCultura');
    Route::get('/evaluacion_adoraciones', [EvaluacionModulosController::class, 'evaluacion_adoraciones'])->name('evaluacion_adoraciones');
    Route::post('/storeAdoraciones', [EvaluacionModulosController::class, 'storeAdoraciones'])->name('storeAdoraciones');
    Route::post('/actualizarEstado', [EvaluacionModulosController::class, 'actualizarEstado'])->name('actualizarEstado');

    //ver evaluaciones
    Route::get('/ver_evaluacion_curiosidad', [EvaluacionModulosController::class, 'ver_evaluacion_curiosidad'])->name('ver_evaluacion_curiosidad');
    Route::get('/ver_evaluacion_cultura', [EvaluacionModulosController::class, 'ver_evaluacion_cultura'])->name('ver_evaluacion_cultura');
    Route::get('/ver_evaluacion_adoraciones', [EvaluacionModulosController::class, 'ver_evaluacion_adoraciones'])->name('ver_evaluacion_adoraciones');

    Route::get('/terminos', [DashboardController::class, 'terminos'])->name('terminos');
    Route::get('/contactenos', [DashboardController::class, 'contactenos'])->name('contactenos');
    Route::post('/storecontactenos', [DashboardController::class, 'sendContactForm'])->name('storecontactenos');
});


Route::get('limpieza', function () {
    //$php = Artisan::call('up');
    $php  = Artisan::call('config:cache');
    $php1 = Artisan::call('view:clear');
    $php2 = Artisan::call('route:clear');
    //$php3 = Artisan::call('migrate:fresh');
    return Redirect::to('/');
});

Route::get('3jecut4rbds_f@j@l@', function () {
    //$php = Artisan::call('up');
    //$php   = Artisan::call('db:seed');
    return Redirect::to('/');
});

//limpiar aplicacion por medio de crobs interno
Route::get('cr34rcache', function () {
    //$php = Artisan::call('up');
    $php   = Artisan::call('config:cache');
    $php1  = Artisan::call('view:cache');
    return Redirect::to('/');
});

//limpiar aplicacion por medio de crobs interno
Route::get('4ctu4l1z4r', function () {
    $php   = Artisan::call('optimize:clear');
    $php1  = Artisan::call('config:cache');
    $php2  = Artisan::call('view:cache');
    return Redirect::to('/');
});

Route::get('3jecut4rkey_f@j@l@', function () {
    //$php = Artisan::call('up');
    $php   = Artisan::call('key:generate');
    return Redirect::to('/');
});



require __DIR__ . '/auth.php';

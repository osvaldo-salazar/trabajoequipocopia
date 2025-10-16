<?php
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\SemanaUController;
use App\Http\Controllers\NoticiaController; //stacy agrego esto 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaPublicController;

Route::get('/about', [NoticiaPublicController::class, 'index'])->name('noticias.public');

Route::get('/', [ConfiguracionController::class, 'index'])->name('admin.configuracion.index');

Route::get('/inicio', [WebSiteController::class, 'inicio'])->name('base.configuracion.inicio');

Route::get('/semana',[SemanaUController::class,'semanaU'])->name('secciones.configuracion.semana');


// ADMIN (gestión de noticias)
Route::get('/admin/noticias', [NoticiaController::class, 'index'])->name('admin.noticias.create');
Route::post('/admin/noticias', [NoticiaController::class, 'store'])->name('admin.noticias.store');



// rutas de noticias-stacy 

Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/noticias/{id}', [NoticiaController::class, 'show'])->name('noticias.show');

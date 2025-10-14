<?php
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\SemanaUController;
use App\Http\Controllers\NoticiaController; //stacy agrego esto 
use Illuminate\Support\Facades\Route;


Route::get('/', [ConfiguracionController::class, 'index'])->name('admin.configuracion.index');

Route::get('/inicio', [WebSiteController::class, 'inicio'])->name('base.configuracion.inicio');

Route::get('/semana',[SemanaUController::class,'semanaU'])->name('secciones.configuracion.semana');

// rutas de noticias-stacy 

Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/noticias/{id}', [NoticiaController::class, 'show'])->name('noticias.show');

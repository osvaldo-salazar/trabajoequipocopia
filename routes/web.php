<?php
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\SemanaUController;
use App\Http\Controllers\NoticiaController; //stacy agrego esto 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaPublicController;


Route::get('/', [ConfiguracionController::class, 'index'])->name('admin.configuracion.index');

Route::get('/inicio', [WebSiteController::class, 'inicio'])->name('base.configuracion.inicio');

Route::get('/semana',[SemanaUController::class,'semanaU'])->name('secciones.configuracion.semana');


// ADMIN (gestión de noticias)
Route::get('/admin', [NoticiaController::class, 'index'])->name('admin.noticias.create');
Route::post('/admin/noticias', [NoticiaController::class, 'store'])->name('admin.noticias.store');
Route::get('/admin/noticias/lista', [NoticiaController::class, 'lista'])->name('admin.noticias.lista');
Route::delete('/admin/noticias/{noticia}', [NoticiaController::class, 'destroy'])->name('admin.noticias.destroy');



// rutas de noticias-stacy 

 Route::get('/noticias', [NoticiaPublicController::class, 'index'])->name('noticias.index');
Route::get('/noticias/{id}', [NoticiaPublicController   ::class, 'show'])->name('noticias.show');
// Página de noticias con el carrusel (noticias destacadas)
Route::get('/noticias', [NoticiaController::class, 'vistaNoticias'])->name('noticias.index');
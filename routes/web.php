<?php
use App\Http\Controllers\Configuracion;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\SemanaUController;
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| RUTAS LUIS
|--------------------------------------------------------------------------
*/

// Ruta principal de tu rama
Route::get('/', [Configuracion::class, 'index'])->name('admin.configuracion.index');

// Configuración admin
Route::get('/admin/configuracion', [Configuracion::class, 'configuracion'])->name('admin.configuracion');
Route::POST('/admin/configuracion', [Configuracion::class, 'update'])->name('admin.configuracion.update');

// Secciones
Route::get('/admin/semanau', [Configuracion::class, 'semanau'])->name('secciones.semanau');
Route::post('/secciones.section', [Configuracion::class, 'section'])->name('secciones.section');

// Rutas propias de tu rama
Route::get('/semana',[SemanaUController::class,'semanaU'])->name('secciones.configuracion.semana');
Route::get('/quienes',[QuienesSomosController::class,'quienes'])->name('secciones.configuracion.quienes');
Route::get('/home',[HomeController::class,'home'])->name('secciones.configuracion.home');

/*
|--------------------------------------------------------------------------
| RUTAS MARCOS (NUEVAS)
|--------------------------------------------------------------------------
*/

// Ruta principal nueva de Marcos
Route::get('/inicio', [WebSiteController::class, 'inicio'])->name('admin.configuracion.padre');

// Si hay otras rutas nuevas de Marcos, colócalas aquí

<?php
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\SemanaUController;
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ConfiguracionController::class, 'base'])->name('admin.configuracion.base');

Route::get('/inicio', [WebSiteController::class, 'inicio'])->name('base.configuracion.inicio');

Route::get('/semana',[SemanaUController::class,'semanaU'])->name('secciones.configuracion.semana');

Route::get('/quienes',[QuienesSomosController::class,'quienes'])->name('secciones.configuracion.quienes');

Route::get('/home',[HomeController::class,'home'])->name('secciones.configuracion.home');
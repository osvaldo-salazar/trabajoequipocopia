<?php
use App\Http\Controllers\Configuracion;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\SemanaUController;
use Illuminate\Support\Facades\Route;


Route::get('/', [Configuracion::class, 'index'])->name('admin.configuracion.index');

Route::get('/admin/configuracion', [Configuracion::class, 'configuracion'])->name('admin.configuracion');

Route::POST('/admin/configuracion', [Configuracion::class, 'update'])->name('admin.configuracion.update');

Route::get('/admin/semanau', [Configuracion::class, 'semanau'])->name('secciones.semanau');

Route::post('/secciones.update', [Configuracion::class, 'section'])->name('secciones.section');


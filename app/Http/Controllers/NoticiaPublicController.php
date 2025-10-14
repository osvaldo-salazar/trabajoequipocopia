<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class NoticiaPublicController extends Controller
{
    public function index()
    {
        // Trae solo las activas y ordenadas por fecha más reciente
        $noticias = Noticia::where('activo', true)
            ->orderBy('fecha', 'desc')
            ->get();

        return view('secciones.noticias_Vista', compact('noticias'));
    }
}

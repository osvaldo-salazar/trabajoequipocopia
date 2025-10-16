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

        return view('noticias.index', compact('noticias'));
    }

        public function show($id)
    {
        $noticia = Noticia::findOrFail($id);
        return view('noticias.show', compact('noticia'));
    }

  public function mostrar_carrsuel($id)
{
    $noticia = \App\Models\Noticia::findOrFail($id);
    return view('noticias.index', compact('noticia'));
}




}



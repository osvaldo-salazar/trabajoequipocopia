<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    
    public function index()
    {
        $noticias = Noticia::where('activo', true)->orderBy('fecha', 'desc')->get();
        return view('noticias.index', compact('noticias'));
    }

    
    public function show($id)
    {
        $noticia = Noticia::findOrFail($id);
        return view('noticias.show', compact('noticia'));
    }
}

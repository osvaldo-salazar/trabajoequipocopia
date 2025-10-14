<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{
   public function index()
{
    $noticias = Noticia::orderBy('fecha', 'desc')->get();
    return view('admin.noticias.create', compact('noticias'));
}

public function store(Request $request)
{
    // Validar campos
    $request->validate([
        'titulo' => 'required|string|max:255',
        'autor' => 'required|string|max:255',
        'fecha' => 'required|date',
        'descripcion_corta' => 'required|string',
        'descripcion_larga' => 'required|string',
        'imagen' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Crear una nueva instancia del modelo
    $noticia = new Noticia();
    $noticia->titulo = $request->titulo;
    $noticia->autor = $request->autor;
    $noticia->fecha = $request->fecha;
    $noticia->descripcion_corta = $request->descripcion_corta;
    $noticia->descripcion_larga = $request->descripcion_larga;
    $noticia->destacado = $request->has('destacado') ? 1 : 0;
    $noticia->activo = $request->has('activo') ? 1 : 0;

    // Si hay una imagen, la guardamos en public/assets/img/noticias
    if ($request->hasFile('imagen')) {
        $file = $request->file('imagen');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/noticias'), $filename);
        $noticia->imagen = 'assets/img/noticias/' . $filename;
    }

    // Guardar la noticia en la base de datos
    $noticia->save();

    // Redirigir con mensaje
    return redirect()->back()->with('success', 'Noticia agregada correctamente.');
}

}

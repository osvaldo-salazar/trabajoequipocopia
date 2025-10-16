<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ConfiguracionModel;
use Illuminate\Support\Facades\File;

class Configuracion extends Controller
{
    public function index()
    {

        return view('admin.admin');
    }

    public function configuracion()
    {
        $config = ConfiguracionModel::first(); // solo 1 fila
        return view('admin.configuracion', compact('config'));
    }

      public function update(Request $request)
    {
        $config = ConfiguracionModel::first();

        $request->validate([
            'hero_home' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'hero_quienes_somos' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'hero_noticias' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'logo_home' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $rutas = [
            'hero_home' => 'assets/hero_home/',
            'hero_quienes_somos' => 'assets/hero_quienes_somos/',
            'hero_noticias' => 'assets/hero_noticias/',
            'logo_home' => 'assets/logo_home/',
        ];

        // $campos = ['hero_home', 'hero_quienes_somos', 'hero_noticias', 'logo_home'];

        foreach ($rutas as $campo => $carpeta) {
            if ($request->hasFile($campo)) {
                $destino = public_path($carpeta);

                // Crear carpeta si no existe
                if (!File::exists($destino)) {
                    File::makeDirectory($destino, 0755, true);
                }

                // Eliminar imagen anterior si existe
                if ($config->$campo && File::exists(public_path($config->$campo))) {
                    File::delete(public_path($config->$campo));
                }

                // Guardar nueva imagen
                $archivo = $request->file($campo);
                $nombreArchivo = $campo . '_' . time() . '.' . $archivo->getClientOriginalExtension();
                $archivo->move($destino, $nombreArchivo);

                // Guardar la ruta relativa en la BD (por ejemplo: assets/hero_home/hero_home_1734292.png)
                $config->$campo = $carpeta . $nombreArchivo;
            }
        }

        $config->save();

        return back()->with('success', 'Imágenes actualizadas correctamente.');
    }

}

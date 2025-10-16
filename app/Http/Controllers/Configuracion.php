<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $config = DB::table('configuracion')->first();
        return view('admin.configuracion', compact('config'));
    }

      public function update(Request $request)
    {

        $request->validate([
            'hero_home' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'hero_quienes_somos' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'hero_noticias' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'logo_home' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $config = DB::table('configuracion')->first();

        $rutas = [
            'hero_home' => 'assets/hero_home/',
            'hero_quienes_somos' => 'assets/hero_quienes_somos/',
            'hero_noticias' => 'assets/hero_noticias/',
            'logo_home' => 'assets/logo_home/',
        ];

        // $campos = ['hero_home', 'hero_quienes_somos', 'hero_noticias', 'logo_home'];

        foreach ($rutas as $field => $folder) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);

                // Eliminar imagen anterior si existe
                if (!empty($config->$field) && file_exists(public_path($config->$field))) {
                    unlink(public_path($config->$field));
                }

                // Guardar nueva imagen
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path($folder), $filename);

                // Actualizar ruta en la base de datos
                DB::table('configuracion')->update([
                    $field => $folder . $filename
                ]);
            }
        }

        return response()->json(['success' => true, 'message' => 'Imágenes actualizadas correctamente']);
    }

}

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

        $config = ConfiguracionModel::first();
        return view('secciones.semanaU', compact('config'));
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

        public function semanau()
    {
        $config = ConfiguracionModel::first();
        return view('admin.section_semanau', compact('config'));
    }

    public function section(Request $request)
    {
        $request->validate([
            'section' => 'required|string|in:section_matricula,section_semana_u',
            'estado' => 'required|boolean',
        ]);

        $config = ConfiguracionModel::first();

        if (!$config) {
            return response()->json(['success' => false, 'message' => 'No existe registro de configuración']);
        }

        $config->update([
            $request->section => $request->estado
        ]);

        $mensaje = $request->estado
            ? 'Sección activada correctamente ✅'
            : 'Sección desactivada correctamente 🚫';

        return response()->json(['success' => true, 'message' => $mensaje]);
    }

}

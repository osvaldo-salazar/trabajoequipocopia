<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ConfiguracionModel;

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

        $path = 'uploads/configuracion/';

        foreach (['hero_home', 'hero_quienes_somos', 'hero_noticias', 'logo_home'] as $campo) {
            if ($request->hasFile($campo)) {
                // Borrar la imagen anterior
                if ($config->$campo && Storage::disk('public')->exists($config->$campo)) {
                    Storage::disk('public')->delete($config->$campo);
                }

                // Guardar la nueva
                $config->$campo = $request->file($campo)->store($path, 'public');
            }
        }

        $config->save();

        return back()->with('success', 'Imágenes actualizadas correctamente.');
    }

    public function semanau()
    {
        $config = ConfiguracionModel::first();
        return view('admin.section_semanau', compact('config'));
    }

    public function section(Request $request)
    {
        $request->validate([
            'section_matricula' => 'required|boolean',
            'section_semana_u' => 'required|boolean',
        ]);

        $config =ConfiguracionModel::first();
        $config->section_matricula = $request->section_matricula;
        $config->section_semana_u = $request->section_semana_u;
        $config->save();

        return response()->json(['success' => true, 'message' => 'Secciones actualizadas correctamente.']);
    }

    public function section_matricula()
    {
        $config = ConfiguracionModel::first();
        $config->section_matricula = !$config->section_matricula;
        $config->save();

        return redirect()->back()->with('success', 'Sección de matrícula actualizada.');
    }

    public function section_semana_u()
    {
        $config = ConfiguracionModel::first();
        $config->section_semana_u = !$config->section_semana_u;
        $config->save();

        return redirect()->back()->with('success', 'Sección de semana universitaria actualizada.');
    }
}

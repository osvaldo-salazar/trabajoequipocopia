<?php

namespace App\Http\Controllers;
use App\Models\ConfiguracionModel;

use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
      public function quienes()
    {
         $config = ConfiguracionModel::first();
        return view('secciones.quienesSomos',compact('config'));
    }
}

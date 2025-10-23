<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfiguracionModel;

class HomeController extends Controller
{
      public function home()
    {
            $config = ConfiguracionModel::first();
        return view('secciones.home', compact('config'));
    }
}

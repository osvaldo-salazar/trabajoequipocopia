<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfiguracionModel;

class WebSiteController extends Controller
{
     public function inicio()
    {
        $config = ConfiguracionModel::first();
        return view('base.padre', compact('config'));
    }
}

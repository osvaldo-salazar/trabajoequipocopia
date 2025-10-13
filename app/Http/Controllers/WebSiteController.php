<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebSiteController extends Controller
{
     public function inicio()
    {
        return view('base.padre');
    }
}

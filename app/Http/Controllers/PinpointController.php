<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinpointController extends Controller
{
    
    public function index()
    {
        return view('pinpoint');
    }

    public function license()
    {
        return view('license');
    }


}

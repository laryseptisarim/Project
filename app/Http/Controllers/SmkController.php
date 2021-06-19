<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmkController extends Controller
{
    public function smkyapmi()
    {
        return view('profil_smk.smkyapmi');
    }
}

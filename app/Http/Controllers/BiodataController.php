<?php

namespace App\Http\Controllers;

use App\Models\Biodata;

class BiodataController extends Controller
{
    public function tampilkan()
    {
        $biodata = Biodata::all();
        return view('tampilan_biodata', compact('biodata'));
    }
}

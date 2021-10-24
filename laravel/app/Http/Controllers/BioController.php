<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bio;
use App\Models\Utils;

class BioController extends Controller
{
    public function mostrarBio(Request $request) {
        $bio = new Bio();
        
        $bio = $bio->listarBio(1);
        
        $bio = $bio[0];
        
        return view('filmes/listarFilmes', compact('bio'));
    }
    
}

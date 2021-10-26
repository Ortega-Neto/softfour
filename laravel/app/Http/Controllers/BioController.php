<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bio;

class BioController extends Controller
{
    public function mostrarBio(Request $request) {
        $id_user = auth()->user()->id;
        $bio = new Bio();
        
        $bioDoUser = $bio->listarBio($id_user);

        if($bioDoUser == NULL){
            return redirect()->to('/bio/inserir'); 
        }
        else{
            return view('bio/listarBio', compact('bioDoUser'));
        }     
    }
    
    public function criarBio() {
        $id_user = auth()->user()->id;
        $bio = new Bio();
        
        $bio->criarBio($id_user);
        return redirect()->to('/bio'); 
    }
    
    public function atualizarBio(Request $request){        
        $request->validate([
            'id' => 'required|integer',
            'id_user' => 'required|integer',
            'descricao' => 'required|string',
            'filme_favorito' => 'required|string',
            'serie_favorita' => 'required|string',
            'livro_favorito' => 'required|string'
        ]);
        
        try{          
            $dadosDoFormulario = array(
                'id' => $request->id,
                'id_user' => $request->id_user,
                'descricao' => $request->descricao,
                'filme_favorito' => $request->filme_favorito,
                'serie_favorita' => $request->serie_favorita,
                'livro_favorito' => $request->livro_favorito
            );
            
            $bio = new Bio();
            $bio->atualizarBio($dadosDoFormulario);
            return redirect()->to('/bio'); 
        } catch (Exception $ex) {
            throw $ex;
        }  
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    protected $fillable = [
        'id_user',
        'descricao',
        'filme_favorito',
        'serie_favorita',
        'livro_favorito'
    ];
    
    public function criarBio($dados)
    {      
        try {
            DB::beginTransaction();
            $novaBio = new Bio;
            $novaBio->id_user = $dados['id_user'];
            $novaBio->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    
    public function listarBio($id) {
        return DB::table('bio')->where('id', $id)->orderBy('created_at')->get();
    }
    
    public function atualizarBio($dados) {        
       
        try {
            $bio = Bio::find($dados['id']);
            
            $bio->id_user = $dados['id_user'];
            $bio->descricao = $dados['descricao'];
            $bio->filme_favorito = $dados['filme_favorito'];
            $bio->serie_favorita = $dados['serie_favorita'];
            $bio->livro_favorito = $dados['livro_favorito'];

            $bio->save();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}

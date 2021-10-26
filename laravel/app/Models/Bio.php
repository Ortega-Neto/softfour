<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bio extends Model
{
    protected $fillable = [
        'id_user',
        'descricao',
        'filme_favorito',
        'serie_favorita',
        'livro_favorito'
    ];
    
    public static function criarBio($id_user)
    {      
        try {
            DB::beginTransaction();
            $novaBio = new Bio;
            $novaBio->id_user = $id_user;
            $novaBio->descricao = "";
            $novaBio->filme_favorito = "";
            $novaBio->serie_favorita = "";
            $novaBio->livro_favorito = "";
            $novaBio->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    
    public function listarBio($id_user) {
        return DB::table('bios')->where('id_user', $id_user)->orderBy('created_at')->first();
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

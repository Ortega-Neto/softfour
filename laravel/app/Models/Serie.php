<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Serie extends Model
{
    protected $fillable = [
        'id_user',
        'titulo',
        'imagem',
        'ano_lancamento',
        'temporadas',
        'sinopse'
    ];
    
    public function criarSerie($dados)
    {      
        try {
            $id_user = auth()->user()->id;
            
            DB::beginTransaction();
            $novaSerie = new Serie;
            $novaSerie->id_user = $id_user;
            $novaSerie->titulo = $dados['titulo'];
            $novaSerie->imagem = $dados['imagem'];
            $novaSerie->ano_lancamento = $dados['ano_lancamento'];
            $novaSerie->temporadas = $dados['temporadas'];
            $novaSerie->sinopse = $dados['sinopse'];
            $novaSerie->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    
    public function listarSeries() {
        return DB::table('series')->orderBy('created_at')->get();
    }
    
    public function deletarSerie($id) {
        DB::table('series')->where('id', $id)->delete();
    }
    
    public function atualizarSerie($dados) {        
       
        try {
            $serie = Serie::find($dados['id']);
            
            $serie->titulo = $dados['titulo'];
            $serie->imagem = $dados['imagem'];
            $serie->ano_lancamento = $dados['ano_lancamento'];
            $serie->temporadas = $dados['temporadas'];
            $serie->sinopse = $dados['sinopse'];

            $serie->save();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}

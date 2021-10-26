<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Livro extends Model
{
    protected $fillable = [
        'id_user',
        'titulo',
        'imagem',
        'ano_lancamento',
        'autor',
        'sinopse'
    ];
    
    public function criarlivro($dados)
    {      
        try {
            $id_user = auth()->user()->id;
            
            DB::beginTransaction();
            $novolivro = new livro;
            $novolivro->id_user = $id_user;
            $novolivro->titulo = $dados['titulo'];
            $novolivro->imagem = $dados['imagem'];
            $novolivro->ano_lancamento = $dados['ano_lancamento'];
            $novolivro->autor = $dados['autor'];
            $novolivro->sinopse = $dados['sinopse'];
            $novolivro->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    
    public function listarLivros() {
        return DB::table('livros')->orderBy('created_at')->get();
    }
    
    public function deletarLivro($id) {
        DB::table('livros')->where('id', $id)->delete();
    }
    
    public function atualizarLivro($dados) {        
       
        try {
            $livro = livro::find($dados['id']);
            
            $livro->titulo = $dados['titulo'];
            $livro->imagem = $dados['imagem'];
            $livro->ano_lancamento = $dados['ano_lancamento'];
            $livro->autor = $dados['autor'];
            $livro->sinopse = $dados['sinopse'];

            $livro->save();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}

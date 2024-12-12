<?php
namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function listar()
    {
        $produtos = Produtos::get();


        return view('produtos',compact('produtos'));



    }








    public function cadastro()
    {
        return view('produtos.create');
    }

    public function salvar(Request $request)
    {
    }

    public function remover(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto deletado com sucesso!');
    }
}

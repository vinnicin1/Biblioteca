<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprestimo;
use App\Models\Usuario;
use App\Models\Livro;

class EmprestimoController extends Controller
{
    public function index()
    {
        $emprestimos = Emprestimo::with('usuario', 'livro')->get();
        return view('emprestimos.index', compact('emprestimos'));
    }

    public function create()
    {
        $usuarios = Usuario::all();
        $livros = Livro::all();
        return view('emprestimos.create', compact('usuarios', 'livros'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id',
            'id_livro' => 'required|exists:livros,id',
            'data_emprestimo' => 'required|date',
            'data_devolucao' => 'nullable|date|after:data_emprestimo',
        ]);

        Emprestimo::create($request->all());

        return redirect('/emprestimos');
    }
}

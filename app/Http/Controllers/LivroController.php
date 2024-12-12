<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Autor;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::with('autor')->get();
        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        $autores = Autor::all();
        return view('livros.create', compact('autores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'id_autor' => 'required|exists:autores,id',
            'id_categoria' => 'required',
        ]);

        Livro::create($request->all());

        return redirect('/livros');
    }
}


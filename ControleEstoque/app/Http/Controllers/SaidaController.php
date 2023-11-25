<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Models\Saida;
use App\Models\Produto;

use Illuminate\Support\Facades\Redirect;

class SaidaController extends Controller {

    public function create()
    {
        return view('saida.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'idProduto' => 'required',
            'quantidade' => 'required',
            'idUsuario' => 'required'
        ]);
        
        Saida::create($request->post());

        $produtoModificado = Produto::find($request->input('idProduto'));
        $produtoModificado->quantidade -= $request->input('quantidade');
        $produtoModificado->save();

        $saidas = Saida::all();
        return view('saida.index', ['saidas' => $saidas]);
    }

    public function destroy(Saida $saida)
    {
        $saida->delete();

        $saidas = Saida::all();
        return view('saida.index', ['saidas' => $saidas]);
    }

    public function index() {
        $saidas = Saida::all();
        return view('saida.index', ['saidas' => $saidas]);
    }
}

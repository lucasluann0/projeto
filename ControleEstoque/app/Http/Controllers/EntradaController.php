<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Models\Entrada;
use App\Models\Produto;

use Illuminate\Support\Facades\Redirect;

class EntradaController extends Controller {

    public function create()
    {
        return view('entrada.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'idProduto' => 'required',
            'quantidade' => 'required',
            'idUsuario' => 'required'
        ]);
        
        Entrada::create($request->post());

        $produtoModificado = Produto::find($request->input('idProduto'));
        $produtoModificado->quantidade += $request->input('quantidade');
        $produtoModificado->save();

        $entradas = Entrada::all();
        return view('entrada.index', ['entradas' => $entradas]);
    }

    public function destroy(Entrada $entrada)
    {
        $entrada->delete();

        $entradas = Entrada::all();
        return view('entrada.index', ['entradas' => $entradas]);
    }

    public function index() {
        $entradas = Entrada::all();
        return view('entrada.index', ['entradas' => $entradas]);
    }
}

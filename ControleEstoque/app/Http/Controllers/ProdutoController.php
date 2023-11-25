<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\Produto;

class ProdutoController extends Controller {

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required',
            'preco_compra' => 'required',
            'preco_venda' => 'required'
        ]);
        
        Produto::create($request->post());
 
        return Redirect::to('/dashboard');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return Redirect::to('/dashboard');
    }

    public function edit(Produto $produto)
    {
        return view('edit',compact('produto'));
    }
 
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'descricao' => 'required',
            'preco_compra' => 'required',
            'preco_venda' => 'required'
        ]);
        
        $produto->fill($request->post())->save();
 
        return Redirect::to('/dashboard');
    }

    public function show(Produto $produto)
    {
        return view('details',compact('produto'));
    }
}

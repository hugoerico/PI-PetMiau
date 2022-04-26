<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;


class EnderecosController extends Controller
{
    public function index()
    {
        return view('endereco.index')->with('enderecos',Endereco::all());
    }

    public function create()
    {
        return view('endereco.create');
    }

    public function store(Request $request)
    {

        Endereco::create($request->all());
        session()->flash("sucesso", 'endereco cadastrado com sucesso');
        return redirect(route('endereco.index'));

    }

    public function edit(Endereco $endereco)
    {
        return view('endereco.edit')->with('endereco',$endereco);
    }

    public function update(Request $request, Endereco $endereco)
    {

        $endereco->update([
            'endereco' => $request->endereco
        ]);
        session()->flash("sucesso", 'endereco atualizado com sucesso');
        return redirect(route('endereco.index'));

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Observacao;
use App\Models\Pet;
use Illuminate\Support\Facades\DB;

class ObservacoesController extends Controller
{
    public function index(Request $request,$pet_id)
    {
        $obs= DB::table('obsevacoes')->where('pet_id', '=', $pet_id)->get();
        return view('observacao.index')->with(['observacoes'=>$obs,'pet_id'=>$pet_id]);
    }

    public function create(Request $request, $pet_id)
    {
        
        $id=$pet_id;
        $obs= DB::table('obsevacoes')->where('pet_id', '=', $pet_id)->get();
        return view('observacao.index')->with(['pet_id'=>$id,'observacoes'=>$obs]);
    }

    public function store(Request $request,$id )
    {

        Observacao::create([
            'texto' => $request->texto,
            'pet_id' => $id
            ]);
        $obs= DB::table('obsevacoes')->where('pet_id', '=', $id)->get();
        session()->flash("sucesso", 'observação cadastrado com sucesso');
        return view('observacao.index')->with(['pet_id'=>$id,'observacoes'=>$obs]);

    }

    public function edit(Observacao $observacao, )
    {
        
        $obs= DB::table('obsevacoes')->where('pet_id', '=', 13)->get();
        return view('observacao.index')->with(['observacao'=>$observacao , 'pet_id'=>13,'observacoes'=>$obs, 'abrir'=>4]);
    }

    public function update(Request $request, Observacao $observacao)
    {

        $observacao->update([
            'texto' => $request->texto
        ]);
        session()->flash("sucesso", 'observação atualizado com sucesso');
        return redirect(route('observacao.index'));

    }

    public function destroy(Observacao $observacao,$id)
    {
    
        Observacao::where('id', $id)->delete();
     session()->flash('sucesso','Usuario apagado com sucesso');
     return redirect(route('pet.index'));
     
    }
}

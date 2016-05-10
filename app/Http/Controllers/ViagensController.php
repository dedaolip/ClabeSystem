<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\Funcionario;
use App\Veiculo;
use App\Viagem;
use Illuminate\Http\Request;

use App\Http\Requests;

class ViagensController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $viagens = Viagem::all();
        return view('backend.viagens.principal', ['viagens'=>$viagens]);
    }

    public function create()
    {
        $motoristas = Funcionario::all();
        $veiculos = Veiculo::all();
        return view('backend.viagens.create', ['motoristas'=>$motoristas, 'veiculos'=>$veiculos]);
    }

    public function store(Request $request)
    {
        Viagem::create($request->all());
        return redirect(route('via.index'));
    }

    public function edit($id)
    {
        $viagem = Viagem::find($id);
        return view('backend.viagem.edit', compact('viagem'));
    }

    public function update(Request $request, $id)
    {
        $viagem = Viagem::find($id);
        if($viagem->update($request->all())) {
            Viagem::find($viagem->id)->update($request->all());
        } else {
            // @TODO: FELIPE: implementar exceção
        }
        return redirect(route('via.index'));
    }

    public function destroy($id)
    {
        Viagem::find($id)->delete();
        return redirect(route('via.index'));
    }
}

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
        return view('backend.viagens.principal');
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
        $cliente = Cliente::find($id);
        return view('backend.clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        if($cliente->update($request->all())) {
            Pessoa::find($cliente->pessoa_id)->update($request->all());
        } else {
            // @TODO: FELIPE: implementar exceção
        }
        return redirect(route('cli.index'));
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        if($cliente->delete()){
            Pessoa::find($id)->where('id', $cliente->pessoa_id)->delete();
        }
        return redirect(route('cli.index'));
    }
}

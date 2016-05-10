<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Pessoa;
use Illuminate\Http\Request;

use App\Http\Requests;

class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::all();
        return view('backend.clientes.principal', ['clientes' => $clientes]);
    }

    public function create()
    {
        return view('backend.clientes.create');
    }

    public function store(Request $request)
    {
        $pessoa = Pessoa::create($request->all());
        Cliente::create(['pessoa_id' => $pessoa->id]);
        return redirect(route('cli.index'));
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

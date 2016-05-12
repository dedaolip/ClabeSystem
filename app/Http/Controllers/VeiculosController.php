<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\Veiculo;
use Illuminate\Http\Request;

use App\Http\Requests;

class VeiculosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $veiculos = Veiculo::paginate(10);
        return view('backend.veiculos.principal', ['veiculos' => $veiculos]);
    }

    public function create()
    {
        $funcionarios = Funcionario::all();
        return view('backend.veiculos.create', ['funcionarios' => $funcionarios]);
    }

    public function store(Request $request)
    {
        Veiculo::create($request->all());
        return redirect(route('vei.index'));
    }

    public function edit($id)
    {
        $veiculo = Veiculo::find($id);
        //dd($veiculo);
        $funcionarios = Funcionario::all();
        return view('backend.veiculos.edit', ['funcionarios' => $funcionarios, 'veiculo' => $veiculo]);
    }

    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::find($id);
        if($veiculo->update($request->all())) {
            Veiculo::find($id)->update($request->all());
        } else {
            // @TODO: FELIPE: implementar exceção
        }
        return redirect(route('vei.index'));
    }

    public function destroy($id)
    {

        Veiculo::find($id)->delete();

        return redirect(route('cli.index'));
    }
}

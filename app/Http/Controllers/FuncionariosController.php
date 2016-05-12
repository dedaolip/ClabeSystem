<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\Pessoa;
use App\Funcionario;
use Illuminate\Http\Request;

use App\Http\Requests;

class FuncionariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $funcionarios = Funcionario::paginate(10);

        return view('backend.funcionarios.principal', ['funcionarios' => $funcionarios]);
    }

    public function create()
    {
        $cargos = Cargo::all();
        return view('backend.funcionarios.create', ['cargos' => $cargos]);
    }

    public function store(Request $request)
    {
        //dd($request->cargo_id);
        $pessoa = Pessoa::create($request->all());
        Funcionario::create(['pessoa_id' => $pessoa->id, 'cargo_id' => $request->cargo_id]);
        return redirect(route('func.index'));
    }

    public function edit($id)
    {
        $funcionario = Funcionario::find($id);
        $cargos = Cargo::all();
        return view('backend.funcionarios.edit', ['funcionario' => $funcionario, 'cargos' => $cargos]);
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::find($id);
        if($funcionario->update($request->all())) {
            Pessoa::find($funcionario->pessoa_id)->update($request->all());
        } else {
            // @TODO: FELIPE: implementar exceção
        }
        return redirect(route('func.index'));
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::find($id);
        if($funcionario->delete()){
            Pessoa::find($id)->where('id', $funcionario->pessoa_id)->delete();
        }
        return redirect(route('func.index'));
    }
}

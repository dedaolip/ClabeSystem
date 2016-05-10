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
        $funcionarios = Funcionario::all();

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
}

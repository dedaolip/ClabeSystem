<?php

namespace App\Http\Controllers;

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
        return view('backend.funcionarios.create');
    }
}

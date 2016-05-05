<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FuncionariosController extends Controller
{
    public function func()
    {
        return view('backend.funcionarios.principal');
    }

    public function create()
    {
        return view('backend.funcionarios.create');
    }
}

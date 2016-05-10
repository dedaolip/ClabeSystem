<?php

namespace App\Http\Controllers;

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
        return view('backend.funcionarios.principal');
    }

    public function create()
    {
        return view('backend.funcionarios.create');
    }
}

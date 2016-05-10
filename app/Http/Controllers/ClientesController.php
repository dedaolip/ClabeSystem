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

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClintesController extends Controller
{
    public function func()
    {
        return view('backend.clientes.principal');
    }

    public function create()
    {
        return view('backend.clientes.create');
    }
}

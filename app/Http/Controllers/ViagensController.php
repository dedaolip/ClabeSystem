<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ViagensController extends Controller
{
    public function index()
    {
        return view('backend.viagens.principal');
    }

    public function create()
    {
        return view('backend.viagens.create');
    }
}

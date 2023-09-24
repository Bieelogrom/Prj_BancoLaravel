<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function create()
    {
        return view('chamado');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}

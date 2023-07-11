<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChecadaController extends Controller
{
    public function index(){
        return view('checada.index');
    }

    public function create(){
        return view('checada.create');
    }

    public function show($checada){
        return view('checada.show',['checada' => $checada]);
    }
}

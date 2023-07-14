<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class ChecadaController extends Controller
{
    public function index(){
        $datos = users::all();
        return view('home', compact(('datos')));
    }

    public function create(){
        return view('checada.create');
    }

    public function show($checada){
        return view('checada.show',['checada' => $checada]);
    }
}

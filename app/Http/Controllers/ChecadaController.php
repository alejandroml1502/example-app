<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\acc_monitor_log;
use Illuminate\Http\Request;

class ChecadaController extends Controller
{
    public function index(){

        $datos = acc_monitor_log::all();
        return view('home', );
    }

    public function create(){
        return view('checada.create');
    }

    public function show($checada){
        return view('checada.show',['checada' => $checada]);
    }
}

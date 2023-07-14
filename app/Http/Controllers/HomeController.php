<?php

namespace App\Http\Controllers;

use App\Models\acc_monitor_log;
use App\Models\users;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
       // return view('home');
        
    }

    public function index()
    {
        $datos = users::all();
        return view('home', compact(('datos')));
    }
}

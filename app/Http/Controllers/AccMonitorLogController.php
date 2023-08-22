<?php

namespace App\Http\Controllers;

use App\Models\Acc_monitor_log;
use App\Models\Userinfo;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccMonitorLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$datos = DB::select('SelectAllUsersWithHisChecInfo');
        //dd($datos);
        //return view('home', ["data"=>json_encode($datos)] ,compact('datos'));
        //$datos = DB::select('SelectAllUsersWithHisChecInfo ');
        return view('home');
        

    }

    public function search(Request $request)
    {
        $output="";
        $employee = DB::select('SelectAllUsersWithHisChecInfo '.$request->
        search);
        //$employee=acc_monitor_log::where('pin','Like','%' .$request->
        //search.'%')->get();

        foreach($employee as $employee)
        {
            $output.=
            '<tr>
                <td>'.$employee->pin.'</td>
                <td>'.$employee->Name.'</td>
                <td>'.$employee->lastname.'</td>
                <td>'.$employee->time.'</td>
                <td>
                <div>
                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                </div>
                
                </td>
            </tr>';

        }
        return response($output);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Acc_monitor_log $acc_monitor_log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acc_monitor_log $acc_monitor_log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Acc_monitor_log $acc_monitor_log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acc_monitor_log $acc_monitor_log)
    {
        //
    }
}

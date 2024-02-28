<?php

namespace App\Http\Controllers;

use App\Models\ukk_fia2024model;
use Illuminate\Http\Request;

class ukk_fia2024Controller extends Controller
{
    //
    function index()
    {
        $data= ukk_fia2024model::orderBy ('bukuId','asc')->paginate(1);
        return view('ukk_fia2024/index')->with('data',$data);
    }
    function detail()
    {
        $data=ukk_fia2024model::orderBy ('bukuId','asc')->paginate(1);
        return view('ukk_fia2024/index')->with('data',$data);
    }
    function create()
    {

    }
    function delete()
    {
        
    }
}

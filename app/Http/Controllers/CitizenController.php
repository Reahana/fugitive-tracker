<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function index()
    {
        return view('admin.citizen.add');
    }

    public  function  manage ()
    {
        return view('admin.citizen.manage');
    }
    public function edit()
    {
        return view('admin.citizen.edit');
    }
}

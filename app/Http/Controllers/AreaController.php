<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        return view('admin.area.add');
    }

    public function manage ()
    {
        return view('admin.area.manage');
    }
}

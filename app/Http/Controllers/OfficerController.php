<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function  index()
    {
        return view('admin.officer.add');
    }

    public function manage()
    {
        return view ('admin.officer.manage');
    }
}

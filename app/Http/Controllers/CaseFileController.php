<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseFileController extends Controller
{
    public function  index()
    {
        return view('front.officer.file-case.add');
    }
}

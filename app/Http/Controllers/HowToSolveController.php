<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowToSolveController extends Controller
{
    public function index()
    {
        return view('front.how-to-solve.solve');
    }
}

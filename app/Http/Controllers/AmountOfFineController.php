<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmountOfFineController extends Controller
{
    public function index()
    {
        return view('front.amount-of-fine.fine');
    }
}

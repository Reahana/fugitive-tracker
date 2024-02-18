<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckStatusController extends Controller
{
    public function index()
    {
        return view('front.check-status.check');
    }
}

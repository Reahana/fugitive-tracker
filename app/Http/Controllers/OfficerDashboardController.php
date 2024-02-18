<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerDashboardController extends Controller
{
    public function index()
    {
        return view('front.officer.dashboard.dashboard');
    }
}

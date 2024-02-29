<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficerDashboardController extends Controller
{
    private $officers;
    public function index()
    {
        $this->officers =Officer::where('p_id',Auth::user()->p_id)->get();
        return view('front.officer.dashboard.dashboard',
            ['officers'=>$this->officers ]);
    }
}

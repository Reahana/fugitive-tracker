<?php

namespace App\Http\Controllers;

use App\Models\CaseFile;
use App\Models\Dismiss;
use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficerDashboardController extends Controller
{
    private $officers , $cases, $dismiss;
    public function index()
    {
        $this->dismiss = Dismiss::where('p_id', Auth::user()->p_id)->count();
     $this->cases = CaseFile::where('p_id',Auth::user()->p_id)->count();
        $this->officers =Officer::where('p_id',Auth::user()->p_id)->get();
        return view('front.officer.dashboard.dashboard',
            ['officers'=>$this->officers, 'cases'=>$this->cases, 'dismiss'=>$this->dismiss ]);
    }
}

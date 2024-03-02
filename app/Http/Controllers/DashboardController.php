<?php

namespace App\Http\Controllers;

use App\Models\CaseFile;
use App\Models\Citizen;
use App\Models\Dismiss;
use App\Models\Officer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $citizen, $officer, $case,$dismiss;
    public function index()
    {
        $this->citizen= Citizen::count();
        $this->officer = Officer::count();
        $this->case = CaseFile::count();
        $this->dismiss =Dismiss::count();
        return view('admin.home.index',[
            'citizen'=>$this->citizen,
            'officer'=>$this->officer,
            'case'=>$this->case,
            'dismiss'=>$this->dismiss
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AllCase;
use App\Models\CaseFile;
use App\Models\Citizen;
use App\Models\Dismiss;
use App\Models\Officer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $citizen, $officer, $case,$dismiss, $req, $allCase;
    public function index()
    {
        $this->citizen= Citizen::count();
        $this->officer = Officer::count();
        $this->case = CaseFile::count();
        $this->dismiss =Dismiss::count();
        $this->req = Dismiss::join('case_files', 'case_files.c_id', '=','dismisses.c_id')
            ->count();
        $this->allCase = AllCase::count();
        return view('admin.home.index',[
            'citizen'=>$this->citizen,
            'officer'=>$this->officer,
            'case'=>$this->case,
            'dismiss'=>$this->dismiss,
            'req'=>$this->req,
            'allcase'=>$this->allCase
        ]);
    }
}

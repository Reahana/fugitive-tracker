<?php

namespace App\Http\Controllers;

use App\Models\CaseFile;
use App\Models\Citizen;
use App\Models\Dismiss;
use App\Models\Law;
use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaseDismissController extends Controller

{
    private $req, $cases, $officer;
    public function index($id)
    {
        return view('front.officer.dismiss-case.form', ['case' => CaseFile::find($id), 'citizens' => Citizen::all(), 'laws' => Law::all()]);

    }

    public  function requestDismiss(Request $request)
    {
        Dismiss::newDismiss($request);
        return redirect()->back()->with('message', 'Case Dismiss Request send successfully');
    }

    public function requestList()
    {$this->officer = Officer::where('p_id',Auth::user()->p_id)->get('*');
        $this->req = CaseFile::join('dismisses', 'dismisses.c_id', '=','case_files.c_id')
        ->get('*');

        return view('front.officer.dismiss-case.request-list',['cases' => $this->req, 'officers'=>$this->officer]);
    }
    public  function  viewDismissList ()
    {
        $this->req = Dismiss::join('case_files', 'case_files.c_id', '=','dismisses.c_id')
        ->get('*');
        return view('admin.dismiss-case.case-list',['cases' => $this->req]);

    }


}
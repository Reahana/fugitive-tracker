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
    private $req, $cases;
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
    {
        $this->req = CaseFile::join('dismisses', 'dismisses.c_id', '=','case_files.c_id')
        ->get('*');
       // $this->req = Dismiss::select('c_id')->get();
        //$this->cases = CaseFile::where('c_id',Dismiss::select('c_id')->get())->get('*');
      //  $this->cases = CaseFile::where('c_id',$this->req->c_id)->get('*');

        return view('front.officer.dismiss-case.request-list',['cases' => $this->req]);
    }
public  function  viewDismissList ()
{
    $this->req = Dismiss::join('case_files', 'case_files.c_id', '=','dismisses.c_id')
        ->get('*');
    return view('admin.dismiss-case.case-list',['cases' => $this->req]);

}


}
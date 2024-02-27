<?php

namespace App\Http\Controllers;

use App\Models\CaseFile;
use App\Models\Citizen;
use App\Models\Law;
use App\Models\Officer;
use Illuminate\Http\Request;

class CaseDismissController extends Controller
{
    private $msg;

    public  function  index()
    {
        return view('front.officer.dismiss-case.dismiss',['cases' => CaseFile::orderBy('id')->get()] );
    }

    public function requestDismiss(Request $request,$id)
    {
        $this->msg = $request->input('msg');
        return view ('front.officer.dismiss-case.request',['officer'=>Officer::all(),'message'=>$this->msg,'case' => CaseFile::find($id) ,'citizens'=>Citizen::all(),'laws'=>Law::all()]);
        //return view('front.officer.dismiss-case.request',['case' => CaseFile::find($id) ,'citizens'=>Citizen::all(),'laws'=>Law::all()]);
    }

}
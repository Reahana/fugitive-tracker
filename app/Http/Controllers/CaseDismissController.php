<?php

namespace App\Http\Controllers;

use App\Models\CaseFile;
use App\Models\Citizen;
use App\Models\Dismiss;
use App\Models\Law;
use App\Models\Officer;
use Illuminate\Http\Request;

class CaseDismissController extends Controller
{
    public function index($id)
    {
        return view('front.officer.dismiss-case.dismiss', ['case' => CaseFile::find($id), 'citizens' => Citizen::all(), 'laws' => Law::all()]);

    }

    public  function requestDismiss(Request $request)
    {
        Dismiss::newDismiss($request);
        return redirect()->back()->with('message', 'Case Dismiss Request send successfully');
    }





}
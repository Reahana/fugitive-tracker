<?php

namespace App\Http\Controllers;

use App\Models\CaseFile;
use App\Models\Citizen;
use App\Models\Law;
use App\Models\Officer;
use Illuminate\Http\Request;

class CaseDismissController extends Controller
{
    public function edit($id)
    {
        return view('front.officer.dismiss-case.dismiss',['case' => CaseFile::find($id) ,'citizens'=>Citizen::all(),'laws'=>Law::all()]);
    }





}
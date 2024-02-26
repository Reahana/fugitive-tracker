<?php

namespace App\Http\Controllers;

use App\Models\CaseFile;
use App\Models\Citizen;
use Illuminate\Http\Request;

class CheckStatusController extends Controller
{
    private $cases, $search , $nid;

    public function index()

    {

        return view('front.check-status.check',['cases'=> CaseFile::all()]);
    }

    public function search(Request $request){

        $this-> search = $request->input('search');

$this->nid = Citizen::where('nid',$this->search)->get('*');

        $this-> cases   = CaseFile::where('nid',  $this->search)->get('*');
        return view('front.check-status.status',['cases'=>$this->cases,'nids'=>$this->nid]);




    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Law;
use Illuminate\Http\Request;

class CaseFileController extends Controller
{
    private $name;
    public function  index()
    {
        return view('front.officer.file-case.add',['citizens'=>Citizen::all(),'laws'=>Law::all()]);
    }
    public function getName()
    {
        $this->name= Citizen::where('nid',$_GET['id'])->get();
        return json_encode($this->name);

    }

    public function getLaw()
    {
//        $this->name= Citizen::where('nid',$_GET['id'])->get();
        return json_encode(Law::where('nid',$_GET['id'])->get());

    }
}

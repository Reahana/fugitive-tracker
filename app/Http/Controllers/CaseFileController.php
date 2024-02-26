<?php

namespace App\Http\Controllers;

use App\Models\CaseFile;
use App\Models\Citizen;
use App\Models\Law;
use Illuminate\Http\Request;

class CaseFileController extends Controller
{
    private $name , $law;
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
       $this->law = Law::where('clause',$_GET['id'])->get();
        return json_encode($this->law );

    }

    public function  create(Request $request)
    {
        CaseFile::newCaseFile($request);
        return redirect()->back()->with('message', 'Case Filed successfully');
    }

    public function manage ()
    {
        return view('front.officer.file-case.manage',['cases' => CaseFile::orderBy('id')->get()]);
    }

    public function edit($id)
    {
        return view('front.officer.file-case.edit',['case' => CaseFile::find($id) ,'citizens'=>Citizen::all(),'laws'=>Law::all()]);
    }
    public function update(Request $request, $id)
    {
        CaseFile::updateCaseFile($request,$id);

        return redirect('/manage-case')->with('message', 'Case info update successfully');
    }
    public function delete( $id)
    {
        Area::deleteArea($id);

        return redirect('/manage-area')->with('message', 'Area  delete successfully');
    }
}

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
        return view('admin.area.manage',['areas' => Area::orderBy('id')->get()]);
    }

    public function edit($id)
    {
        return view('admin.area.edit',['area' => Area::find($id) ]);
    }
    public function update(Request $request, $id)
    {
        Area::updateArea($request,$id);

        return redirect('/manage-area')->with('message', 'Area info update successfully');
    }
    public function delete( $id)
    {
        Area::deleteArea($id);

        return redirect('/manage-area')->with('message', 'Area  delete successfully');
    }
}

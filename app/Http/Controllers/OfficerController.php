<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Officer;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function  index()
    {
        return view('admin.officer.add',['areas'=>Area::all()]);


    }
    public function  create(Request $request)
    {
        Officer::newOfficer($request);
        return redirect()->back()->with('message', 'Officer add successfully');
    }

    public function manage()
    {
        return view('admin.officer.manage',['officers'=> Officer::orderBy('id')->get()]);

    }

    public function edit($id)
    {
        return view('admin.officer.edit',['officer' => Officer::find($id), 'areas' => Area::all() ]);
    }


    public function update(Request $request, $id)
    {
        Officer::updateOfficer($request,$id);


        return redirect('/manage-officer')->with('message', 'Officer info update successfully');
    }
    public function delete( $id)
    {

Officer::deleteOfficer($id);
        return redirect('/manage-officer')->with('message', 'Officer  delete successfully');
    }
}

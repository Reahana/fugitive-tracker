<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function index()
    {
        return view('admin.citizen.add');
    }
public function  create(Request $request)
{
    Citizen::newCitizen($request);
    return redirect()->back()->with('message', 'NID add successfully');
}

    public  function  manage ()
    {
        return view('admin.citizen.manage', ['citizens' => Citizen::orderBy('id')->get()]);
    }


    public function edit($id)
    {
        return view('admin.citizen.edit',['citizen' => Citizen::find($id) ]);
    }
    public function update(Request $request, $id)
    {
        Citizen::updateCitizen($request,$id);

        return redirect('/manage-nid')->with('message', 'NID info update successfully');
    }
    public function delete( $id)
    {
        Citizen::deleteCitizen($id);

        return redirect('/manage-nid')->with('message', 'NID  delete successfully');
    }
}

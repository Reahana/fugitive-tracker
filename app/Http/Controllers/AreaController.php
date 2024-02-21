<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        return view('admin.area.add');
    }

    public function  create(Request $request)
    {
        Area::newArea($request);
        return redirect()->back()->with('message', 'Area added successfully');
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

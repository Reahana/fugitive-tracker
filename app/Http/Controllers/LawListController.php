<?php

namespace App\Http\Controllers;

use App\Models\Law;
use Illuminate\Http\Request;

class LawListController extends Controller
{
    public function show()
    {
        return view('front.law-list.law');
    }
    public function index()
    {
        return view('admin.law-list.add');
    }

    public function  create(Request $request)
    {
        Law::newLaw($request);
        return redirect()->back()->with('message', 'Law added successfully');
    }

    public function manage ()
    {
        return view('admin.law-list.manage',['laws' => Law::orderBy('id')->get()]);
    }

    public function edit($id)
    {
        return view('admin.law-list.edit',['law' => Law::find($id) ]);
    }
    public function update(Request $request, $id)
    {
        Law::updateLaw($request,$id);
        return redirect('/manage-law')->with('message', 'Law info update successfully');
    }
    public function delete( $id)
    {
        Law::deleteLaw($id);

        return redirect('/manage-law')->with('message', 'Law  delete successfully');
    }
}

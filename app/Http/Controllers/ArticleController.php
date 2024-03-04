<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin.articles.add');
    }

    public function  create(Request $request)
    {
        Area::newArea($request);
        return redirect()->back()->with('message', 'articles added successfully');
    }

    public function manage ()
    {
        return view('admin.articles.manage',['areas' => Area::orderBy('id')->get()]);
    }

    public function edit($id)
    {
        return view('admin.articles.edit',['area' => Area::find($id) ]);
    }
    public function update(Request $request, $id)
    {
        Area::updateArea($request,$id);

        return redirect('/manage-article')->with('message', 'Area info update successfully');
    }
    public function delete( $id)
    {
        Area::deleteArea($id);

        return redirect('/manage-article')->with('message', 'Area  delete successfully');
    }
}

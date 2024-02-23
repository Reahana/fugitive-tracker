<?php

namespace App\Http\Controllers;

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
}

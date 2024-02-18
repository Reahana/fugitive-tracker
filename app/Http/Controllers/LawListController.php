<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawListController extends Controller
{
    public function index()
    {
        return view('front.law-list.law');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AllCase;
use Illuminate\Http\Request;

class AllCaseController extends Controller
{
    public function index()
    {
        return view('admin.all-cases.show',['allcase' => AllCase::orderBy('id')->get()]);
    }
}

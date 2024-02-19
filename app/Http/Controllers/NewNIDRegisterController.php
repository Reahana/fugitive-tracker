<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewNIDRegisterController extends Controller
{
    public function index()
    {
        return view ('front.officer.NID-register.add');
    }
}

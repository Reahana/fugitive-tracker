<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class TrackerController extends Controller
{
    public function  index(){
        return view('front.home.home',['articles'=>Article::orderBy('id')->get()]);
    }
    public function redirect(){

            return view('redirectPage');

    }
}

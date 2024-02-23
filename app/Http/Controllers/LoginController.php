<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('front.login.login');
    }
    public function officer(Request $request)
    {
        if(auth()->attempt(['email'=> $request->email, 'password'=>$request->password]))
        {

            if (auth()->user()->role_id == 1) {
                return redirect('/officers-dashboard');
            }
            else{
                return redirect('/')->with('message', 'You dont have permission to view this page.');

            }
        }
        else{
            return redirect()->back()->with('message', 'Wrong Credential');

        }
    }
}

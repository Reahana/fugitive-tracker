<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    private $officers;
    public function index()
    {
        if(Auth::user()->role_id===1) {
            $this->officers = Officer::where('p_id', Auth::user()->p_id)->select('*')->get();

            return view('front.officer.password.changePassword', [
                'officers' => Officer::where('p_id', Auth::user()->p_id)->select('*')->get()
            ])->with('message', 'Password Change Successfully');
        }
        else{
            return view('admin.password.changePassword')->with('message', 'Password Change Successfully');
        }


    }
    public function changePassword(Request $request)
    {

        User::changePassword($request);
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|same:confirm_password|min:8',
            'confirm_password' => 'required',
        ]);



        return redirect()->back()->with('message','password successfully updated');
    }
}

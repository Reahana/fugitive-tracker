<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficerProfileController extends Controller
{
    private $officer;
    public function index()
    {
        $this->officer = Officer::where('p_id',Auth::user()->p_id)
            ->get('*');
        return view('front.officer.profile.view',
            ['officers'=> $this->officer]
        );
    }

    public function edit()
    { $this->officer = Officer::where('p_id',Auth::user()->p_id)
        ->select('*')->get();
        return view('front.officer.profile.edit',
            ['officers'=>$this->officer]);
    }


    public function update(Request $request, $id)
    {
        Officer::updateOfficerSelf($request,$id);


        return redirect('/view-profile')->with('message', ' Info update successfully');
    }
}

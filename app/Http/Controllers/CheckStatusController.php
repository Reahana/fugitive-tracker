<?php

namespace App\Http\Controllers;

use App\Models\CaseFile;
use Illuminate\Http\Request;

class CheckStatusController extends Controller
{
    private $cases, $search ;

    public function index()

    {

        return view('front.check-status.check',['cases'=> CaseFile::all()]);
    }

    public function search(Request $request){
        // Get the search value from the request
        $this-> search = $request->input('search');

        // Search in the title and body columns from the posts table


        // Return the search view with the resluts compacted
        $this-> cases   = CaseFile::where('nid',  $this->search)->get('*');
        return view('front.check-status.status',['cases'=>$this->cases]);




    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AllCase;
use App\Models\CaseFile;
use App\Models\Citizen;
use App\Models\Law;
use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaseFileController extends Controller
{
    private $name , $law , $area;
    public function  index()
    {

        $this->area = Officer::where('p_id',auth()->user()->p_id)->get('posting');

        return view('front.officer.file-case.add'
            ,['citizens'=>Citizen::all(),
                'laws'=>Law::all(),
                'areas'=>$this->area,
                'officers'=>Officer::where('p_id',Auth::user()->p_id)
            ->select('*')->get()]);
    }
    public function getName()
    {
        $this->name= Citizen::where('nid',$_GET['id'])->get();
        return json_encode($this->name);

    }

    public function getLaw()
    {
       $this->law = Law::where('clause',$_GET['id'])->get();
        return json_encode($this->law );

    }

    public function  create(Request $request)
    {
        AllCase::newAllCase($request);
        CaseFile::newCaseFile($request);
        return redirect()->back()->with('message', 'Case Filed successfully');
    }

    public function manage ()
    {
        return view('front.officer.file-case.manage',
            ['cases' => CaseFile::where('p_id',Auth::user()->p_id)
        ->orderBy('id')->get(),
                'officers'=>Officer::where('p_id',Auth::user()->p_id)
                    ->select('*')->get()]);
    }

    public function edit($id)
    {
        return view('front.officer.file-case.edit',
            ['case' => CaseFile::find($id) ,
                'citizens'=>Citizen::all(),
                'laws'=>Law::all(),
                'officers'=>Officer::where('p_id',Auth::user()->p_id)
                    ->select('*')->get()]);
    }
    public function update(Request $request, $id)
    {
        CaseFile::updateCaseFile($request,$id);

        return redirect('/manage-case')->with('message', 'Case info update successfully');
    }
    public function delete( $id)
    {
        CaseFile::deleteCaseFile($id);

        return redirect('/dismiss-list')->with('message', 'Case delete successfully');
    }
}

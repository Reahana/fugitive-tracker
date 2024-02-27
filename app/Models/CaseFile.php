<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseFile extends Model
{
    use HasFactory;

    private static $caseFile;

    public  static  function newCaseFile($request)
    {
        self::$caseFile = new CaseFile();
        self::$caseFile->p_id  = $request->p_id;
        self::$caseFile->c_id  = $request->c_id;
        self::$caseFile->nid       = $request->nid;
        self::$caseFile->name       = $request->name;
        self::$caseFile->contact  = $request->contact;
        self::$caseFile->clause       = $request->clause;
        self::$caseFile->title  = $request->title;


        self::$caseFile->save();
        return self::$caseFile;
    }
    public static function updateCaseFile($request, $id)
    {
        self::$caseFile = CaseFile::find($id);

        self::$caseFile->p_id  = $request->p_id;
        self::$caseFile->c_id  = $request->c_id;
        self::$caseFile->nid       = $request->nid;
        self::$caseFile->name       = $request->name;
        self::$caseFile->contact  = $request->contact;
        self::$caseFile->clause       = $request->clause;
        self::$caseFile->title  = $request->title;
        self::$caseFile->save();



    }
    public static function deleteLaw($id)
    {
        self::$caseFile = CaseFile::find($id);

        self::$caseFile->Delete();
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllCase extends Model
{
    use HasFactory;
    private static $caseFile;

    public  static  function newAllCase($request)
    {
        self::$caseFile = new AllCase();
        self::$caseFile->p_id  = $request->p_id;
        self::$caseFile->c_id  = $request->c_id;
        self::$caseFile->nid       = $request->nid;
        self::$caseFile->name       = $request->name;
        self::$caseFile->contact  = $request->contact;
        self::$caseFile->clause       = $request->clause;
        self::$caseFile->title  = $request->title;
        self::$caseFile->area  = $request->area;


        self::$caseFile->save();
        return self::$caseFile;
    }
}

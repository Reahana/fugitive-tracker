<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dismiss extends Model
{
    use HasFactory;

    private static $caseDismiss;

    public  static  function newDismiss($request)
    {
        self::$caseDismiss = new Dismiss();
        self::$caseDismiss->p_id = $request->p_id;
        self::$caseDismiss->c_id = $request->c_id;
        self::$caseDismiss->comment = $request->comment;


        self::$caseDismiss->save();
        return self::$caseDismiss;

    }

    public function caseFile ()
    {

        return $this->belongsToMany('App\Models\CaseFile');
    }
}

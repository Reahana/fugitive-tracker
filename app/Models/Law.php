<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Law extends Model
{
    use HasFactory;

    private static $law;

    public  static  function newLaw($request)
    {
        self::$law = new Law();
        self::$law->l_id  = $request->l_id;
        self::$law->clause       = $request->clause;
        self::$law->title  = $request->title;
        self::$law->fine       = $request->fine;
        self::$law->save();
        return self::$law;
    }
    public static function updateLaw($request, $id)
    {
        self::$law = Law::find($id);

        self::$law->l_id  = $request->l_id;
        self::$law->clause       = $request->clause;
        self::$law->title  = $request->title;
        self::$law->fine       = $request->fine;
        self::$law->save();

        self::$law->save();


    }
    public static function deleteLaw($id)
    {
        self::$law = Law::find($id);

        self::$law->Delete();
    }
}

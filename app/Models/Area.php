<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    private static $area;

    public  static  function newArea($request)
    {
        self::$area = new Area();
        self::$area->area_no  = $request->area_no;
        self::$area->name       = $request->name;
        self::$area->save();
        return self::$area;
    }
    public static function updateArea($request, $id)
    {
        self::$area = Area::find($id);

        self::$area->area_no  = $request->area_no;
        self::$area->name       = $request->name;

        self::$area->save();


    }
    public static function deleteArea($id)
    {
        self::$area = Area::find($id);

        self::$area->Delete();
    }



}

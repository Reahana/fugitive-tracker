<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;
    private static $citizen, $image ,$imageName ,$directory,$imageUrl;


    public static function getImageUrl($request)
    {

        self::$image = $request->file('image');

        if(self::$image)
        {
            self::$imageName = time().'.'.self::$image->getClientOriginalExtension();
            self::$directory = 'citizen-images/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory.self::$imageName;        }

        else
        {
            return '';
        }

    }

    public  static  function newCitizen($request)
    {
        self::$citizen = new Citizen();
        self::$citizen->nid  = $request->nid;
        self::$citizen->name       = $request->name;
        self::$citizen->dob      = $request->dob;
        self::$citizen->image      = self::getImageUrl($request);
        self::$citizen->save();
        return self::$citizen;
    }
    public static function updateCitizen($request, $id)
    {
        self::$citizen = Citizen::find($id);

        self::$image = $request->file('image');

        if(self::$image)
        {

            if(file_exists(self::$citizen->image))
            {
                unlink(self::$citizen->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$citizen->image;

        }

        self::$citizen->nid  = $request->nid;
        self::$citizen->name       = $request->name;
        self::$citizen->dob      = $request->dob;
        self::$citizen->image      = self::$imageUrl;
        self::$citizen->save();


    }
    public static function deleteCitizen($id)
    {
        self::$citizen = Citizen::find($id);


        if(file_exists(self::$citizen->image))
        {
            unlink(self::$citizen->image);


        }
        self::$citizen->Delete();
    }
}

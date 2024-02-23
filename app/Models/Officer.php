<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    use HasFactory;
    private static $officer, $image ,$imageName ,$directory,$imageUrl;


    public static function getImageUrl($request)
    {

        self::$image = $request->file('image');

        if(self::$image)
        {
            self::$imageName = time().'.'.self::$image->getClientOriginalExtension();
            self::$directory = 'officer-images/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory.self::$imageName;        }

        else
        {
            return '';
        }

    }

    public  static  function newOfficer($request)
    {
        self::$officer = new Officer();
        self::$officer->p_id  = $request->p_id;
        self::$officer->name       = $request->name;
        self::$officer->rank      = $request->rank;
        self::$officer->posting       = $request->posting;
        self::$officer->number      = $request->number;
        self::$officer->email       = $request->email;
        self::$officer->password      = bcrypt($request->password);
        self::$officer->image      = self::getImageUrl($request);
        self::$officer->save();
        return self::$officer;
    }
    public static function updateOfficer($request, $id)
    {
        self::$officer = Officer::find($id);

        self::$image = $request->file('image');

        if(self::$image)
        {

            if(file_exists(self::$officer->image))
            {
                unlink(self::$officer->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$officer->image;

        }

        self::$officer->p_id  = $request->p_id;
        self::$officer->name       = $request->name;
        self::$officer->rank      = $request->rank;
        self::$officer->posting       = $request->posting;
        self::$officer->number      = $request->number;
        self::$officer->email       = $request->email;
        self::$officer->password      = bcrypt($request->password);

        self::$officer->image      = self::$imageUrl;
        self::$officer->save();


    }
    public static function deleteOfficer($id)
    {
        self::$officer = Officer::find($id);


        if(file_exists(self::$officer->image))
        {
            unlink(self::$officer->image);


        }
        self::$officer->Delete();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    private static $article, $image ,$imageName ,$directory,$imageUrl;


    public static function getImageUrl($request)
    {

        self::$image = $request->file('image');

        if(self::$image)
        {
            self::$imageName = time().'.'.self::$image->getClientOriginalExtension();
            self::$directory = 'article-images/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory.self::$imageName;        }

        else
        {
            return '';
        }

    }

    public  static  function newArticle($request)
    {
        self::$article = new Article();
        self::$article->article_no  = $request->article_no;
        self::$article->author_name       = $request->author_name;
        self::$article->title      = $request->title;
        self::$article->body      = $request->body;
        self::$article->image      = self::getImageUrl($request);
        self::$article->save();
        return self::$article;
    }
    public static function updateArticle($request, $id)
    {
        self::$article = Article::find($id);

        self::$image = $request->file('image');

        if(self::$image)
        {

            if(file_exists(self::$article->image))
            {
                unlink(self::$article->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$article->image;

        }

        self::$article->article_no  = $request->article_no;
        self::$article->author_name       = $request->author_name;
        self::$article->title      = $request->title;
        self::$article->body      = $request->body;;
        self::$article->image      = self::$imageUrl;
        self::$article->save();


    }
    public static function deleteArticle($id)
    {
        self::$article = Article::find($id);


        if(file_exists(self::$article->image))
        {
            unlink(self::$article->image);


        }
        self::$article->Delete();
    }

}

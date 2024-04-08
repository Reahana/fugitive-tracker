<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        return view('admin.articles.add');
    }

    public function  create(Request $request)
    {
        Article::newArticle($request);
        return redirect()->back()->with('message', 'articles added successfully');
    }

    public function manage ()
    {
        return view('admin.articles.manage',['articles' => Article::orderBy('id')->get()]);
    }

    public function edit($id)
    {
        return view('admin.articles.edit',['article' => Article::find($id) ]);
    }
    public function update(Request $request, $id)
    {
        Article::updateArticle($request,$id);

        return redirect('/manage-article')->with('message', 'Area info update successfully');}
    public function delete( $id)
    {
        Article::deleteArticle($id);

        return redirect('/manage-article')->with('message', 'Area  delete successfully');
    }

    public function show($id)
    {
        return view ('front.article.show',['article' => Article::find($id) ]);
    }
}

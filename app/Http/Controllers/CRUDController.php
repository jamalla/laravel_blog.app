<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Article;


class CRUDController extends Controller
{
    //

    public function AddArticle(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$article = new Article();
    		$article->title = $request->input('title');
    		$article->body = $request->input('body');
    		$article->user_id = Auth::user()->id;

    		$article->save();

    		$articles = Article::all();
    		$articles = Array('articles'=>$articles);

    		return view('crud.article.ViewArticles',$articles);
    	}
    	

    	return view('crud.article.AddArticle');
    }

    public function ViewArticles()
    {
    	$articles = Article::all();
    	$articles = Array('articles'=>$articles);

    	return view('crud.article.ViewArticles',$articles);


    }
}

<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
            use Illuminate\Http\Request;// my put
use App\Http\Controllers\Controller;
use App\http\Requests\CreateArticleRequest;
use Carbon\Carbon;
//use Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index',compact('articles'));
        //return $articles;
        //    return 'get all articles';
    }

    public function show($id)
    {

        //dd("show");
        //return $id;
        $article = Article::find($id);
        return view('articles.show',compact('article'));
        //return $article;
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
       // $input = Request::all();
       // $input['published_at'] = Carbon::now();

        //validation




        //Article::create(Request::all());
        Article::create($request->all());
        return redirect('articles');
    }

    public function edit($id){
        //dd("edit");
        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    public function update($id, CreateArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('articles');
    }
}

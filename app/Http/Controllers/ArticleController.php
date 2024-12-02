<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesFormRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
   public function index(){
    $articles = Article::with('user')->orderBy("created_at", "desc")->get();
    return view('articles.articles',compact("articles"));
   }

   public function contact(){
    return view('layouts.contact');
   } 

   public function show($id)
    {
        $article = Article::with('user')->findOrFail($id);

        return view('articles.show', compact('article'));
    }

   public function store(ArticlesFormRequest $request){
    $user = Auth::user(); //On récupère l'utilisateur connecté 
        $request['user_id'] = $user->id;

        $art =  Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'file_path' => $request->file_path ? $request->file('file_path')->store('file', 'public') : $request->file_path,
            'user_id' => $request->user_id,
            'image' => $request->image ? $request->file('image')->store('img', 'public') : $request->image,
        ]);

        return redirect('/')->with(['success_message' => 'L\'article a été crée !']);
   }

   public function edit(Article $article)
   {
       
       return view('articles.edit', compact('article'));
   }

   public function update(ArticlesFormRequest $request, Article $article)
   {
       $article->update($request->all());
       return redirect('/')->with(['success_message' => 'L\'article a été modofier !']);;;
   }


   public function create(){
    return view('articles.add');
   }

   public function delete(Article $article){
    $article->delete();
    return redirect('/')->with(['error_message' => 'L\'article a été Supprimé !']);;;
}
}

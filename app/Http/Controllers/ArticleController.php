<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesFormRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    //Afichage des articles
    public function index()
    {
        $articles = Article::with('user')->orderBy("created_at", "desc")->get();
        return view('articles.articles', compact("articles"));
    }

    //Affichage des articles de l'user connecté
    public function myart()
    {
        $user = Auth::user();
        $articles = Article::where("user_id", $user->id)->orderBy("created_at", 'desc')->get();
        return view('articles.myArt', compact("articles"));
    }

    //
    public function contact()
    {
        return view('layouts.contact');
    }

    //Voir un article
    public function show($id)
    {
        $article = Article::with('user')->findOrFail($id);

        return view('articles.show', compact('article'));
    }

    //Création de l'article après avoir vérifier si les champs son correct
    public function store(ArticlesFormRequest $request)
    {
        $user = Auth::user(); //On récupère l'utilisateur connecté 
        $request['user_id'] = $user->id;
        $art =  Article::create([
            'title' => $request->title,
            'content' => html_entity_decode($request->content),
            'file_path' => $request->file_path ? $request->file('file_path')->store('file', 'public') : $request->file_path,
            'description'=>$request->description,
            'user_id' => $request->user_id,
            'image' => $request->image ? $request->file('image')->store('img', 'public') : $request->image,
        ]);

        return redirect('/')->with(['success_message' => 'L\'article a été crée !']);
    }

    //La vue d'édition de l'article
    public function edit(Article $article)
    {

        return view('articles.edit', compact('article'));
    }

    //Mis à jour de larticle
    public function update(ArticlesFormRequest $request, Article $article)
    {
        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'file_path' => $request->file_path ? $request->file('file_path')->store('file', 'public') : $request->file_path,
            'image' => $request->image ? $request->file('image')->store('img', 'public') : $request->image,
            'description'=>$request->description,
        ]);
        return redirect('/')->with(['success_message' => 'L\'article a été modofier !']);;;
    }


    //Vue de la création de l'article
    public function create()
    {
        return view('articles.add');
    }

    //Suppression de l'aricle
    public function delete(Article $article)
    {
        $article->delete();
        return redirect('/')->with(['error_message' => 'L\'article a été Supprimé !']);;;
    }
}

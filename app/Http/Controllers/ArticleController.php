<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function AjoutArticle() {

        return view('pages.articles.add-articles');

    }

    public function ListArticle() {

        $articles = Article::all();

        return view('pages.articles.list-articles', compact('articles'));

    }

    public function PostArticle(Article $article, Request $request)
    
     {

            $validation = $request->validate([

                'categorie' => ['required'],
                'titre' => ['required'],
                'libelle' => ['required'],
                'prix' => ['required'],
                'status' => ['required'],
                'quantite' => ['required'],
                'description' => ['required']
            ]);

            $article = new Article();
            $article->categorie = $request->categorie;
            $article->titre = $request->titre;
            $article->libelle = $request->libelle;
            $article->prix = $request->prix;
            $article->status = $request->status;
            $article->quantite = $request->quantite;
            $article->description = $request->description;

            $article->save();
        

        return redirect()->back()->with('status', 'SUCCESS');
    }

    Public function Update(Article $id) {
        
        return view('pages.articles.update-article', ['article' => $id ]);
    }

    public function UpdateArticle(Request $request) {


        $validation = $request->validate([

            'categorie' => ['required'],
            'titre' => ['required'],
            'libelle' => ['required'],
            'prix' => ['required'],
            'description' => ['required']
        ]);

        $article =  Article::find($request->$id);
        $article->categorie = $request->categorie;
        $article->titre = $request->titre;
        $article->libelle = $request->libelle;
        $article->prix = $request->prix;
        $article->description = $request->description;

        $article->update();
    

        return redirect('pages.articles.list-article')->back()->with('succcess', 'SUCCESS');

    }

    public function Show(Article $id) {

        return view('pages.articles.show', [
            'article' => $id
        ]);
    }

    public function Delete(Article $article) {

        $article->delete();

        return redirect('pages.articles.list-article')->back()->with('succcess', 'Supreimer avec success');

    }

    
}

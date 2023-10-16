<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function index()
    {
        return view('nieuws.index', [
            'articles' => Article::orderByDesc('created_at')->get(),
            'latestArticle' => Article::latest()->first(),
            'latestFluiter' => Article::where('isFluiter', '1')->latest()->first(),
        ]);
    }

    public function show($id)
    {
        return view('nieuws.show', [
            'article' => Article::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('nieuws.create');
    }

    public function store()
    {
        $newArticleImageName = time() . '-' . request('image')->getClientOriginalName();

        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->text = request('text');
        $article->image_path = $newArticleImageName;
        $article->isFluiter = request('fluiter');

        request('image')->move(public_path('images/articles'), $newArticleImageName);

        if(request('doc') != null && request('doc_name') != null && request('doc_name') != "") {
            $newArticleDocumentName = time() . '-' . request('doc')->getClientOriginalName();
            request('doc')->move(public_path('/files/articles'), $newArticleDocumentName);
            $article->document_path = $newArticleDocumentName;
            $article->document_name = request('doc_name');
        }

        $article->save();

        return redirect('/admin/nieuws');
    }

    public function edit($id)
    {
        return view('nieuws.edit', [
            'article' => Article::findOrFail($id)
        ]);
    }

    public function update($id)
    {
        $article = Article::findOrFail($id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->text = request('text');
        $article->isFluiter = request('fluiter');
        if(request('image') != null) {
            File::delete(public_path('/images/articles/'.$article->image_path));
            $newArticleImageName = time() . '-' . request('image')->getClientOriginalName();
            request('image')->move(public_path('/images/articles'), $newArticleImageName);
            $article->image_path = $newArticleImageName;
        }
        if(request('doc') != null && request('doc_name') != null && request('doc_name') != "") {
            File::delete(public_path('/files/articles/'.$article->document_path));
            $newArticleDocumentName = time() . '-' . request('doc')->getClientOriginalName();
            request('doc')->move(public_path('/files/articles'), $newArticleDocumentName);
            $article->document_path = $newArticleDocumentName;
            $article->document_name = request('doc_name');
        }

        $article->save();

        return redirect('/admin/nieuws');
    }

    public function delete($id) {
        $article = Article::findOrFail($id);

        $article->delete();

        File::delete(public_path('/images/articles/'.$article->image_path));

        return redirect('/admin/nieuws');
    }
}

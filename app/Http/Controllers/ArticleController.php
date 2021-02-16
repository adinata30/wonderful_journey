<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class ArticleController extends Controller
{
    public function readArticle($id){
        $article = Article::where('id',$id)->first();
        $articles = Article::where('user_id',$article->user->id)->where('id','!=',$id)->take(3)->get();
        $categories = Category::all();
        return view('article',[
            'article' => $article,
            'categories'=>$categories,
            'articles'=>$articles,
        ]);

    }

    public function deleteArticle($id){
        $article = Article::find($id);
        
        $article->delete();
        if(Auth::user()->role == "Admin")
        {
            return redirect('/admin');
        }
        else return redirect('/blog');
        
    }

    public function addArticle(){
        return view('user.create_blog');
    }

    public function storeArticle(Request $request){
        
        $request->validate([
            'title'=>'required',
            'category'=>'required',
            'description'=>'required',
           'image' => 'required|image'
        ]);
        
        $category = Category::where('name', 'like', "{$request->category}")->first();
        
        $image_path = Storage::disk('public')->putFile('imgs/' . $category['id'], $request->file('image'));
        $hashed_name = $request->file('image')->hashName();
        $article = new Article([
            'user_id'=>Auth::user()->id,
            'title' => $request->get('title'),
            'category_id' => $category['id'],
            'description' => $request->get('description'),
            'image' => $hashed_name
        ]);
        $article->save();
       
    
        return redirect('/new-article')->with('success', 'Article added!');
    }
    
}

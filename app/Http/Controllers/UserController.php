<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Article;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function greeting(){
        $user = Auth::user();
        $categories = Category::all();
        return view('greeting',[
            'user'=>$user,
            'categories'=>$categories,
        ]
    );
    }

    public function userPanel(){
        $users = User::where("role","Member")->get();
        return view('admin.user',[
            'users'=>$users,
        ]);
    }
    public function adminPanel(){
        $articles = Article::all();
        return view('admin.admin',[
            'articles'=>$articles,
        ]);
    }

    public function deleteUser($id){
        $user = User::find($id);

        $user->delete();

        return redirect('/user');
    }

    public function viewBlog(){
        $user = User::where("id",Auth::user()->id)->with("articles")->first();
        
        return view('user.blog',[
            'user'=>$user,
        ]);
    }
    public function editProfile(){
        $user = Auth::user();
        return view('user.profile',[
            'user'=>$user,
        ]);
    }
    public function updateProfile(Request $request){
        $user = Auth::user();
        
        $user->name = $request["name"];
        $user->email = $request["email"];
        $user->phone = $request["phone"];
        $user->save();
        return redirect('profile');
    }

    
}

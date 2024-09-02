<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $user_id=Auth::id();
        $posts=Post::where('id',$user_id)->get();
        return view('posts.index',['posts'=>$posts]);
    }
    public function create(){
        return view('posts.create');
    }
}

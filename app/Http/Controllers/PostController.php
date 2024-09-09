<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view("index", ["posts"=>$posts]);
    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view("show", ["post"=>$post]);
    }
}

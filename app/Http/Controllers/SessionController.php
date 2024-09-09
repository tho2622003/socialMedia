<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){

        return view("create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'min:8', 'max:50'],
            'content' => ['required', 'string', 'max:255'],
        ]);

        $validatedData['user'] = Auth::user()->name;

        $validatedData['commentCount'] = "0";

        $post = Post::create($validatedData);

        return redirect('/')->with('success', 'Post created successfully!');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect("/");
    }
}

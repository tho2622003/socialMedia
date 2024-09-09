<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $posts = Post::query()
            ->where('title', 'LIKE', '%'.request('query').'%')
            ->get();
        return view('results', ['posts' => $posts]);
    }
}

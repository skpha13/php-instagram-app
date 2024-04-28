<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        Post::factory()->create([
           'user_id' => $request->get('user_id'),
           'title' => $request->get('title'),
           'description' => $request->get('description')
        ]);

        return view('posts.create');
    }
}

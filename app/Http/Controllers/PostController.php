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

        return redirect('/posts');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $newTitle = $request->filled('title') ? $request->get('title') : $post->title;
        $newDescription = $request->filled('description') ? $request->get('description') : $post->description;

        $post->update([
            'title' => $newTitle,
            'description' => $newDescription
        ]);

        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}

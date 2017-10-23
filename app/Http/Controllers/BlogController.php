<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q', null);
        if ($q) {
            $posts = Post::where('title', 'like', "%$q%")
                ->orWhere('content', 'like', "%$q%")->paginate(6);
        } else {
            $posts = Post::paginate(6);
        }
        return view('welcome', compact('posts', 'q'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('guests.post', compact('post'));
    }

    /**
     * Display the author page.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function author(User $user)
    {
        $posts = $user->posts()->paginate(4);
        $author = $user;
        return view('guests.author', compact('posts', 'author'));
    }
}

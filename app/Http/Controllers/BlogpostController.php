<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    public function show($blog_post_id)
    {
        $blog_post = Blogpost::find($blog_post_id);

        return view('post', ['blog_post' => $blog_post]);
    }

    public function deletePost($blog_post_id)
    {
        Blogpost::find($blog_post_id)->delete();
        $blog_posts = Blogpost::where('user_id', auth()->user()->user_id)->get();

        return view('home', ['blog_posts' => $blog_posts]);
    }

    public function updatePost($blog_post_id)
    {
        $blog_post = Blogpost::find($blog_post_id);

        return view('update_post', ['blog_post' => $blog_post]);
    }

    public function update(Request $request)
    {

        $blog_post = Blogpost::find($request->blog_post_id);
        $blog_post->update($request->all());

        return view('post', ['blog_post'=> $blog_post]);

    }
}

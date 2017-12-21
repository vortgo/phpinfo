<?php

namespace App\Http\Controllers;


use App\Models\Post;

class SiteController extends Controller
{
    /**
     * Main posts list
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::with('tags')->paginate(10);
        return view('index', compact('posts'));
    }

    /**
     * Show single post
     *
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function post(string $slug )
    {
        $post = Post::whereSlug($slug)->first();
        if(!$post){
            abort(404);
        }
        return view('post',compact('post'));
    }
}

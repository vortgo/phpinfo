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
        $posts = Post::with('tags')->where('status', Post::PUBLISHED)->paginate(10);
        return view('index', compact('posts'));
    }

    /**
     * Posts by tags
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tag($tag)
    {
        $posts = Post::with('tags')
            ->where('status', Post::PUBLISHED)
            ->whereHas('tags', function ($query) use($tag){
                $query->where('name', $tag);
            })
            ->paginate(10);
        return view('index', compact('posts'));
    }

    /**
     * Show single post
     *
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function post(string $slug)
    {
        $post = Post::whereSlug($slug)->first();
        if (!$post) {
            abort(404);
        }
        return view('post', compact('post'));
    }


}

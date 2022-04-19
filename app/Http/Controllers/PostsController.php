<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home.index', [
            //get post limit 3
            'posts' => Posts::latest()->limit(3)->get(),
        ]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(StorePostsRequest $request)
    {
        //
    }

    
    public function show(Posts $posts)
    {
        //
    }

    
    public function edit(Posts $posts)
    {
        //
    }

    
    public function update(UpdatePostsRequest $request, Posts $posts)
    {
        //
    }

    
    public function destroy(Posts $posts)
    {
        //
    }

    public function posts()
    {
        return view('frontend.posts', [
            //get post limit 3
            'posts' => Posts::latest()->paginate(6),
        ]);
    }

    public function post(Posts $post)
    {
        return view('frontend.post', [
            'post' => $post,
        ]);
    }
}

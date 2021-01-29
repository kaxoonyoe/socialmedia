<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth']);
    }

    public function index(){
//        $posts = auth()->user()->posts;
        $posts = Post::paginate(20); // to get all posts
        return view('posts.index', [
            'posts' => $posts
        ]);
    }
    public function store(Request $request){
        $this->validate($request , [
           'body' => 'required'
        ]);
        $request->user()->posts()->create($request->only('body'));
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller;

class PostController extends Controller
{


    public function index()
    {

        // return view('sign-up', [
        //     'articles' => Post::all()
        // ]);
        return view('article', [
            'articles' => Post::all()
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('article-details', [
            "article" => $post
        ]);
    }

    public function create()
    {
        return view("create");
    }
}

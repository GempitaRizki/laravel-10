<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    //

    public function index(){
        return view('index');
    }

    public function add(){

        return view('admin.posts.add');

    }

    public function store(Request $request){

        $post = new Post();
        $post->post_title = $request->post_title;
        $post->category_id = $request->cat_id;
        $post->content = $request->content;

        $post->save();

        return back()->with(['message','Post berhasil dibuat!']);
    }
}

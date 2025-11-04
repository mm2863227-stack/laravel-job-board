<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index (){
        $data = Post::simplePaginate(5);
        return view('post.index',['posts'=>$data,"pageTitle"=>"Blog Page"]);
    }

    function show($id){
        $post  = Post::findOrFail($id);
        return view('post.show',['post'=>$post,"pageTitle"=>$post->title]);
    }

    function create(){
         Post::factory(100)->create();
          return redirect('/blog');  
    }
    function delete(){
      Post::destroy(1) ;
    }
}

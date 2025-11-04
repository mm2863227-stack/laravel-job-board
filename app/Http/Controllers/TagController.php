<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class TagController extends Controller
{
    //
    function index (){
        $data = Tag::all();
        return view('tag.index',['tags'=>$data,"pageTitle"=>"Tags"]);
    }
    function create(){
        $tag = Tag::create(
[
              'title'=>'CSS'         
            ]);
          return redirect('/tags');  
    }
    function testManyToMany(){
    // $post10 = Post::find(10);  
    // $post11 = Post::find(11);

    // $post10->tags()->attach([1,2]);
    // $post11->tags()->attach([1]);

    // return response()->json(([
    //     'post10'=>$post10->tags,
    //     'post11'=>$post11->tags
    // ]));
    $tag = Tag::find(1);
    $tag->posts()->attach([10]);
    return response()->json(([
        'tag' => $tag->title,
        'posts' => $tag->posts


    ]));
    
    }


}

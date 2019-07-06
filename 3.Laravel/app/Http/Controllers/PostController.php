<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //

    function createNewPost(){
        $post = Post::create(['content'=>'This is a content']);
        dd($post);
    }
}

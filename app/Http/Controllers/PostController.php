<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //
    public function post(){
        $data = Post::find(1);
        return view ('post')
        ->with('Post',$data);
}
}

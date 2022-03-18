<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //
    public function post(){
        $data = Post::all();
        return view('index')
        -> with('postdata',$data);
    }
}

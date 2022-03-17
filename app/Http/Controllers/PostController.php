<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;


class PostController extends Controller
{
    //
    public function post(){
        $data = Post::all();
        return view ('post', ['post'=>$data]);
}
}

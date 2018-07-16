<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //This is known as a controller action in laravel

    public function index ()
    {
        return view('posts.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::with('user')->simplePaginate(8);

        return view('welcome', compact('posts'));
    }
}

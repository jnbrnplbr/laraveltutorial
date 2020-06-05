<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{


   public function posts () {

      $posts = Post::all();

      $title = 'Post Page';

      return view('posts.post', compact('title','posts'));

   }


   public function show ($id) {

      $post = Post::findOrFail($id);

      return view('posts.show', compact('post'));

   }

}

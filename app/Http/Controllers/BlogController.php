<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog\BlogPostCategory;;
class BlogController extends Controller
{
    public function index()
    {
        // Fetch all posts
        $posts = BlogPost::all();
dd($posts);
        // Pass posts to the view
        return view('blog', compact('posts'));
    }

}

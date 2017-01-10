<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index($slug)
    {
        $page=Post::findBySlugOrFail($slug);
        $title=$page->title;
        return view('frontend.page.index', compact('title','page'));
    }
}

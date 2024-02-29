<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index')->with('posts', $posts);
    }
    public function news()
    {
        return view('news');
    }

    public function home()
    {
        return view("home");
    }

    public function advert()
    {
        return view("advert");
    }

    public function developedParty()
    {
        return view("developedParty");
    }

    public function neighbourhood()
    {
        return view("neighbourhood");
    }

    public function statistical()
    {
        return view("statistical");
    }

    public function relationships()
    {
        return view("relationships");
    }

    public function portfolioDetails()
    {
        return view("portfolioDetails");
    }
}

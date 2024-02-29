<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getoneData($id=null)//id routeda optional {id?} turbdi agar id berilmasa avtomat null o'zlashtiradi
    {
        return response()->json(Post::find($id));//agar id ga urlda qiymat berilsa (?=if) id bo'yicha Post Modeldagi obyektni olib keladi, Agar idga qiymat berilmasa (:=else) Modelagi barcha obyektni olib keladi
    }
    public function data()
    {
        $posts = Post::orderBy('id', 'desc')->limit(6)->get();
        return response()->json([
            // return view('welcome', compact('posts'));
            "posts" => $posts
        ]);
    }
}

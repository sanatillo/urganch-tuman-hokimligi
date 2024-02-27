<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getData($id=null)//id routeda optional {id?} turbdi agar id berilmasa avtomat null o'zlashtiradi
    {
        return response()->json($id?Post::find($id):Post::all());//agar id ga urlda qiymat berilsa (?=if) id bo'yicha Post Modeldagi obyektni olib keladi, Agar idga qiymat berilmasa (:=else) Modelagi barcha obyektni olib keladi
    }
    public function index()
    {
        $posts = Post::all();
        return response()->json([
            "posts" => $posts
        ]);
    }
}

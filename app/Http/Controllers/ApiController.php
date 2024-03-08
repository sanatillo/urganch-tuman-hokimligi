<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Apparat;
use App\Models\Qabulj;
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
            "posts" => $posts
        ]);
    }
    public function apparat()
    {
        $apparats = Apparat::limit(6)->get();
        return response()->json([
            "apparats" => $apparats
        ]);
    }
    public function qabulj()
    {
        $qabulj = Qabulj::get();
        return response()->json([
            'qabulj' =>$qabulj
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function sixdata()
    {
        $posts = Post::orderBy('id', 'desc')->limit(6)->get();
        return response()->json([
            "posts" => $posts  //6 ta malumot qaytaradi
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return response()->json([
            "posts" => $posts
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)//id routeda optional {id?} turbdi agar id berilmasa avtomat null o'zlashtiradi
    {
        return response()->json(Post::find($id));//agar id ga urlda qiymat berilsa (?=if) id bo'yicha Post Modeldagi obyektni olib keladi
    }   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}

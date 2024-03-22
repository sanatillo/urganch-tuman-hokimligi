<?php

namespace App\Http\Controllers;

use App\Models\Tadbir;
use Illuminate\Http\Request;

class TadbirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tadbir = Tadbir::all();
        return response()->json([
            'tadbirlar' => $tadbir
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
    public function show(Tadbir $tadbir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tadbir $tadbir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tadbir $tadbir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tadbir $tadbir)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Rais;
use Illuminate\Http\Request;

class RaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rais = Rais::all();
        return response()->json([
            'raislar' => $rais
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
    public function show(Rais $rais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rais $rais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rais $rais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rais $rais)
    {
        //
    }
}

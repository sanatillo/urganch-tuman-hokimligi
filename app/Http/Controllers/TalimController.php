<?php

namespace App\Http\Controllers;

use App\Models\Talim;
use Illuminate\Http\Request;

class TalimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $talim = Talim::all();
        return response()->json([
            'talim' => $talim
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
    public function show(Talim $talim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Talim $talim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Talim $talim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Talim $talim)
    {
        //
    }
}

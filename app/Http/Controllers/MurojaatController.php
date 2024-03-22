<?php

namespace App\Http\Controllers;

use App\Models\Murojaat;
use Illuminate\Http\Request;

class MurojaatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murojaat = Murojaat::all();
        return response()->json([
            'Murojaatlar' => $murojaat
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
    public function show(Murojaat $murojaat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Murojaat $murojaat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Murojaat $murojaat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Murojaat $murojaat)
    {
        //
    }
}

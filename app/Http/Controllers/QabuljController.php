<?php

namespace App\Http\Controllers;

use App\Models\Qabulj;
use Illuminate\Http\Request;

class QabuljController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qabulj = Qabulj::all();
        return response()->json([
            'qabul_jadvali' => $qabulj
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
    public function show(string $id)
    {
        //
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

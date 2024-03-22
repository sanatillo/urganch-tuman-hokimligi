<?php

namespace App\Http\Controllers;

use App\Models\Apparat;
use Illuminate\Http\Request;

class ApparatController extends Controller
{
    // public function getoneData()
    // {
        //display one data from resource
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apparats = Apparat::all();
        return response()->json([
            "apparats" =>$apparats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('adminpaneldagi view');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $apparat = Apparat::create([
        //     'ism_sharifi' => $request->ism_sharifi,
        //     'hodim_malumotlari' => $request->hodim_malumotlari,
        //     'image_url' => $request->image_url,
        //     'tel_number' => $request->tel_number,
        //     'masuliyatlari' => $request->masuliyatlari,
        //     'email' => $request->email,
        // ]);
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

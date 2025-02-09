<?php

namespace App\Http\Controllers;

use App\Models\Attracties;
use Illuminate\Http\Request;

class AttractiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attracties = Attracties::all();
        return view('attracties', ['attracties' => $attracties]);
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
    public function show(Attracties $attracties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attracties $attracties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attracties $attracties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attracties $attracties)
    {
        //
    }
}

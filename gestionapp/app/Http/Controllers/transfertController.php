<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transfertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administration.pages.transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administration.pages.transaction.creation');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return view('administration.pages.transaction.modifier');

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

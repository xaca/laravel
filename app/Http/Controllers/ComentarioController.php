<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("comentario");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "store ".dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "show ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "edit ".$id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "update ".$id." ".dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "destroy ".$id;
    }
}

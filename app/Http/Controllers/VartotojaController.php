<?php

namespace App\Http\Controllers;

use App\Models\Vartotoja;
use Illuminate\Http\Request;

class VartotojaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vart = Vartotoja::all();
        // $vart = DB::table('Vartotojas')->where('vardas', 'Dennis Cormier II')->get();
        return view('sarasas', ['vartotojai' => $vart]);
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
    public function show(Vartotoja $vartotoja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vartotoja $vartotoja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vartotoja $vartotoja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vartotoja $vartotoja)
    {
        //
    }
}

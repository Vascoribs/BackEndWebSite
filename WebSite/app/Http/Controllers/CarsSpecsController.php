<?php

namespace App\Http\Controllers;

use App\Models\Cars_Specs;
use Illuminate\Http\Request;

class CarsSpecsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show($id)
    {
        $carSpecs = Cars_Specs::find($id);
        return view('Specs', compact('carSpecs'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cars_Specs $cars_Specs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cars_Specs $cars_Specs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cars_Specs $cars_Specs)
    {
        //
    }
}

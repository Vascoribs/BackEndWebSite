<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Cars_Specs;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $carList = Cars::all();
        return view('Index', compact('carList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    public function showform(){
        return view('NewCar');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Plate'=>'required',
            'Brand'=>'required',
            'Model'=>'required',
            'Horsepower' => 'required',
            'Fuel' => 'required',
            'Color' => 'required',
            'Gearbox' => 'required',
            'Engine' => 'required',
            'No_Doors' => 'required',
            'Year' => 'required',
        ]);

        $checkDetails = Cars_Specs::where([
            'Horsepower' => $request["Horsepower"],
            'Fuel' => $request["Fuel"],
            'Color' => $request["Color"],
            'Gearbox' => $request["Gearbox"],
            'Engine' => $request["Engine"],
            'No_Doors' => $request["No_Doors"],
            'Year' => $request["Year"]
        ]) -> first();

            if($checkDetails){
                $newId = $checkDetails["id"];
            }
            else{
                $newDetails = Cars_Specs::create([
                    'Horsepower' => $request["Horsepower"],
                    'Fuel' => $request["Fuel"],
                    'Color' => $request["Color"],
                    'Gearbox' => $request["Gearbox"],
                    'Engine' => $request["Engine"],
                    'No_Doors' => $request["No_Doors"],
                    'Year' => $request["Year"]
                ]);

                $newId = $newDetails["id"];
            }
        
        Cars::create([
            'Plate' => $request["Plate"],
            'Brand' => $request["Brand"],
            'Model' => $request["Model"],
            'cars_specID' => $newId
        ]);
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cars $cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cars $cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cars $cars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cars $cars)
    {
        //
    }
}

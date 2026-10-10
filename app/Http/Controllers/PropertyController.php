<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();

        return response()->json($properties);
    }
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'location' => 'required|string|max:255',
        'property_value' => 'required|numeric|min:0',
        'total_units' => 'required|integer|min:1',
        'unit_price' => 'required|numeric|min:0',
        'available_units' => 'required|integer|min:0',
        'status' => 'required|string|max:50',
    ]);

    $property = Property::create($validated);

    return response()->json($property, 201);
}
public function show(\App\Models\Property $property)
{
    return response()->json($property);
}
}
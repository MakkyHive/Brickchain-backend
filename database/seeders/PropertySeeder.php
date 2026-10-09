<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        Property::create([
            'title' => 'Lagos Tech Hub',
            'description' => 'A modern commercial property located in Lagos, Nigeria.',
            'location' => 'Lagos, Nigeria',
            'property_value' => 500000,
            'total_units' => 5000,
            'unit_price' => 100,
            'available_units' => 4200,
            'status' => 'active',
        ]);
    }
}
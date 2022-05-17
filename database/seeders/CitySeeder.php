<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'name' => 'San José',
                'country_id' => 1
            ],
            [
                'name' => 'Monterrey',
                'country_id' => 2
            ]
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}

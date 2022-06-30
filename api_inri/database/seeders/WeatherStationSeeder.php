<?php

namespace Database\Seeders;

use App\Models\WeatherStation;
use Illuminate\Database\Seeder;

class WeatherStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i = 0; $i < 100; $i++) {
            if ($i % 2 == 0) {
                $status = true;
            } else {
                $status = false;
            }
            WeatherStation::create([
                'status' => $status,
            ]);
        }
    }
}


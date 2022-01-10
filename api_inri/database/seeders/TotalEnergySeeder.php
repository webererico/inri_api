<?php

namespace Database\Seeders;

use App\Models\TotalEnergy;
use Illuminate\Database\Seeder;

class TotalEnergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            TotalEnergy::create([
                'max' => $i + 30,
                'min' => $i - 31,
                'deviation' => $i * 4 / 5,
                'average' => $i * 5 / 4,
                'count' => $i,
                'status' => true
            ]);
        }
    }
}

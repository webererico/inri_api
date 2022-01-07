<?php

namespace Database\Seeders;

use App\Models\BatteryVoltage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatteryVoltageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            BatteryVoltage::create([
                'max' => $i + 10,
                'min' => $i - 10,
                'standard' => $i * 2 / 3,
                'average' => $i * 3 / 2,
                'count' => $i
            ]);
        }
    }
}

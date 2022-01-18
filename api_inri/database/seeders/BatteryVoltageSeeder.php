<?php

namespace Database\Seeders;

use App\Models\BatteryVoltage;
use Carbon\Carbon;
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
            $value = 10*$i;
            BatteryVoltage::create([
                'max' => $value + 10,
                'min' => $value - 10,
                'deviation' => $i * 2 / 3,
                'average' => $value,
                'count' => $i,
                'created_at' => Carbon::now()->addHour($i)
            ]);
        }
    }
}

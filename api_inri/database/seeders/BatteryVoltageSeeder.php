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
        $randon = array();
        for ($i = 0; $i < 2000; $i++) {
            for ($e = 0; $e < 60; $e++) {
                array_push($randon, mt_rand(0, 13));
            }

            $max = max($randon);
            $min = min($randon);
            $average = array_sum($randon) / count($randon);
            $deviation = stand_deviation($randon);
            $randon  = [];


            BatteryVoltage::create([
                'max' => $max,
                'min' => $min,
                'deviation' => $deviation,
                'average' => $average,
                'count' => 60,
                'created_at' => Carbon::now()->addMinute($i)
            ]);
        }
    }
}
function stand_deviation($arr)
{
    $num_of_elements = count($arr);

    $variance = 0.0;

    // calculating mean using array_sum() method
    $average = array_sum($arr) / $num_of_elements;

    foreach ($arr as $i) {
        // sum of squares of differences between 
        // all numbers and means.
        $value = $i * 1.0;
        $variance = $variance + pow(($i - $average), 2);
    }

    return (float)sqrt($variance / $num_of_elements);
}

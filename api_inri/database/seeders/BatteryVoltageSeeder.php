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
        // $randon = array();
        // $date = new Carbon('2022-01-25 00:00:00');
        // for ($i = 0; $i < 2000; $i++) {
        //     for ($e = 0; $e < 20; $e++) {
        //         array_push($randon, mt_rand(5, 13));
        //     }
        //     for ($e = 0; $e < 40; $e++) {
        //         array_push($randon, mt_rand(9, 11.5));
        //     }

        //     $max = max($randon);
        //     $min = min($randon);
        //     $average = array_sum($randon) / count($randon);
        //     $randon  = [];


        //     BatteryVoltage::create([
        //         'max' => $max,
        //         'min' => $min,
        //         'average' => $average,
        //         'created_at' => $date->addMinute(1)
        //     ]);
        // }
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

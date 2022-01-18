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
        $rand = 0;
        $rand1 = 0;
        for ($i = 0; $i < 2000; $i++) {

            if ($i < 200) {
                $rand = mt_rand(8, 13.5);
                $rand1 = mt_rand(8, 13.5);
            } else if (($i > 200 && $i < 700)) {
                $rand = mt_rand(10, 12.0);
                $rand1 = mt_rand(10, 12.0);
            } else {
                $rand = mt_rand(12, 13.5);
                $rand1 = mt_rand(12, 13.5);
            }
            $max = $rand > $rand1 ? $rand : $rand1;
            $min = $rand < $rand1 ? $rand : $rand1;
            $average = ($max + $min) / 2;
            $deviation = stand_deviation([$rand, $rand1]);


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

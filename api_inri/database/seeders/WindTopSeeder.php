<?php

namespace Database\Seeders;

use App\Models\WindTop;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class WindTopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $randon = array();
        $date = new Carbon('2022-01-25 00:00:00');

        for ($i = 0; $i < 2000; $i++) {
            for ($e = 0; $e < 60; $e++) {
                array_push($randon, mt_rand(20, 30));
            }

            $max = max($randon);
            $min = min($randon);
            $average = array_sum($randon) / count($randon);
            $deviation = stand_deviation($randon);
            $randon  = [];

            WindTop::create([
                'max' => $max,
                'min' => $min,
                'deviation' => $deviation,
                'average' => $average,
                'count' => 60,
                'status' => true,
                'created_at' => $date->addMinute(1)
            ]);
        }
    }

    private function stand_deviation($arr)
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
}

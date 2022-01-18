<?php

namespace Database\Seeders;

use App\Models\WindLateral;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class WindLateralSeeder extends Seeder
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
                array_push($randon, mt_rand(10, 20));
            }

            $max = max($randon);
            $min = min($randon);
            $average = array_sum($randon) / count($randon);
            $deviation = stand_deviation($randon);
            $randon  = [];

            WindLateral::create([
                'max' => $max,
                'min' => $min,
                'deviation' => $deviation,
                'average' => $average,
                'count' => 60,
                'status' => true,
                'created_at' => Carbon::now()->addMinute($i)
            ]);
        }
    }
}

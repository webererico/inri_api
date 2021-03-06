<?php

namespace Database\Seeders;

use App\Models\Inversor;
use App\Models\Power;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inversor = DB::table('inversor_status')->where('status_id', '=', 6)->first();
        $date = new Carbon('2022-01-25 00:00:00');
        $randon = array();
        for ($i = 0; $i < 2000; $i++) {
            for ($e = 0; $e < 60; $e++) {
                array_push($randon, mt_rand(60, 70));
            }
            $max = max($randon);
            $min = min($randon);
            $average = array_sum($randon) / count($randon);
            $deviation = stand_deviation($randon);
            $randon  = [];

            Power::create([
                'max' => $max,
                'min' => $min,
                'deviation' => $deviation,
                'average' => $average,
                'count' => 60,
                'status_id' => $inversor->id,
                'created_at' =>$date->addMinute(1)
            ]);
        }
    }
}

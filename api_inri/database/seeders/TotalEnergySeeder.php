<?php

namespace Database\Seeders;

use App\Models\TotalEnergy;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TotalEnergySeeder extends Seeder
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
                array_push($randon, mt_rand(10 + $i, 20 + $i));
            }
            
            $value = array_sum($randon) / count($randon);
            $randon  = [];

            TotalEnergy::create([
                'value' => $value,
                'status_id' => $inversor->id,
                'created_at' => $date->addMinute(1)
            ]);
        }
    }
}

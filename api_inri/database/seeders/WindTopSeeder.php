<?php

namespace Database\Seeders;

use App\Models\WindTop;
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
        for ($i = 0; $i < 100; $i++) {
            WindTop::create([
                'max' => $i + 20,
                'min' => $i - 21,
                'deviation' => $i * 4 / 5,
                'average' => $i * 5 / 4,
                'count' => $i,
                'status' => true
            ]);
        }
    }
}

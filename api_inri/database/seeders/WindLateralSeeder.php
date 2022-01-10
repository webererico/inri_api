<?php

namespace Database\Seeders;

use App\Models\WindLateral;
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
        for ($i = 0; $i < 100; $i++) {
            WindLateral::create([
                'max' => $i + 60,
                'min' => $i - 70,
                'deviation' => $i * 5,
                'average' => $i / 3 ,
                'count' => $i,
                'status' => true
            ]);
        }
    }
}

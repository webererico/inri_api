<?php

namespace Database\Seeders;

use App\Models\Inversor;
use Illuminate\Database\Seeder;

class InversorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            if ($i % 2 == 0) {
                $status = true;
            } else {
                $status = false;
            }
            Inversor::create([
                'status' => $status,
            ]);
        }
    }
}

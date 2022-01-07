<?php

namespace Database\Seeders;

use App\Models\BatteryVoltage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BatteryVoltageSeeder::class,
        ]);
    }
}

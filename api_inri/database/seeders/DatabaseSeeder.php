<?php

namespace Database\Seeders;

use App\Models\BatteryVoltage;
use App\Models\TotalEnergy;
use App\Models\WindLateral;
use App\Models\WindTop;
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
            WindTopSeeder::class,
            WindLateralSeeder::class,
            PowerSeeder::class,
            UserSeeder::class,
            TotalEnergySeeder::class,
            InversorSeeder::class,
            PowerGridSeeder::class,
        ]);
    }
}

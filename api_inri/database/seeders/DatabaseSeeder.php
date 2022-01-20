<?php

namespace Database\Seeders;

use App\Models\BatteryVoltage;
use App\Models\TotalEnergy;
use App\Models\WeatherStation;
use App\Models\WindDirection;
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
            InversorSeeder::class,
            BatteryVoltageSeeder::class,
            WindTopSeeder::class,
            WindLateralSeeder::class,
            PowerSeeder::class,
            UserSeeder::class,
            TotalEnergySeeder::class,
            WeatherStationSeeder::class,
            WindDirectionSeeder::class,
        ]);
    }
}

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
        Inversor::create(
            [
                'status' => 0,
                'description' => 'Sending Paramenters',
            ],
            [
                'status' => 1,
                'description' => 'Wait Sun/Grid',
            ],
            [
                'status' => 2,
                'description' => 'Checking Grid',
            ],
            [
                'status' => 3,
                'description' => 'Measuring Riso ',
            ],
            [
                'status' => 4,
                'description' => 'DcDc Start',
            ],
            [
                'status' => 5,
                'description' => 'Inverter Start',
            ],
            [
                'status' => 6,
                'description' => 'Run',
            ],
            [
                'status' => 7,
                'description' => 'Recovery',
            ],
            [
                'status' => 8,
                'description' => 'Pause',
            ],
            [
                'status' => 9,
                'description' => 'OTH Fault',
            ],
            [
                'status' => 10,
                'description' => 'OTH Fault',
            ],
            [
                'status' => 11,
                'description' => 'Address Setting ',
            ],
            [
                'status' => 12,
                'description' => 'Self Test ',
            ],
            [
                'status' => 13,
                'description' => 'Self Test Fail ',
            ],
            [
                'status' => 14,
                'description' => 'Sensor Test + Meas.Riso ',
            ],
            [
                'status' => 15,
                'description' => 'Leak Fault ',
            ],
            [
                'status' => 16,
                'description' => 'Waiting for manual reset',
            ],
            [
                'status' => 17,
                'description' => 'Internal Error E026 ',
            ],
            [
                'status' => 18,
                'description' => 'Internal Error E027',
            ],
            [
                'status' => 19,
                'description' => 'Internal Error E028 ',
            ],
            [
                'status' => 20,
                'description' => 'Internal Error E029',
            ],
            [
                'status' => 21,
                'description' => 'Internal Error E030 ',
            ],
            [
                'status' => 22,
                'description' => 'Sending Wind Table',
            ],
            [
                'status' => 23,
                'description' => 'Failed Sending table',
            ],
            [
                'status' => 24,
                'description' => 'UTH Fault',
            ],
            [
                'status' => 25,
                'description' => 'Remote OFF',
            ],
            [
                'status' => 26,
                'description' => 'Interlock Fail',
            ],
            [
                'status' => 27,
                'description' => 'Executing Autotest',
            ],
            [
                'status' => 30,
                'description' => 'Waiting Sun',
            ],
            [
                'status' => 31,
                'description' => 'Temperature Fault',
            ],
            [
                'status' => 32,
                'description' => 'Fan Staucked',
            ],
            [
                'status' => 33,
                'description' => 'Int. Com. Fault',
            ],
            [
                'status' => 34,
                'description' => 'Slave Insertion',
            ],
            [
                'status' => 35,
                'description' => 'DC Switch Open',
            ],
            [
                'status' => 36,
                'description' => 'TRAS Switch Open',
            ],
            [
                'status' => 37,
                'description' => 'MASTER Exclusion',
            ],
            [
                'status' => 38,
                'description' => 'Auto Exclusion',
            ],
            [
                'status' => 98,
                'description' => 'Erasing Internal EEprom',
            ],
            [
                'status' => 99,
                'description' => 'Erasing External EEprom',
            ],
            [
                'status' => 100,
                'description' => 'Counting EEprom',
            ],
            [
                'status' => 101,
                'description' => 'Freeze',
            ],
        );
    }
}

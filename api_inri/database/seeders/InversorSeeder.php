<?php

namespace Database\Seeders;

use App\Models\Inversor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InversorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'status_id' => 0,
                'description' => 'Sending Paramenters',
            ],
            [
                'status_id' => 1,
                'description' => 'Wait Sun/Grid',
            ],
            [
                'status_id' => 2,
                'description' => 'Checking Grid',
            ],
            [
                'status_id' => 3,
                'description' => 'Measuring Riso ',
            ],
            [
                'status_id' => 4,
                'description' => 'DcDc Start',
            ],
            [
                'status_id' => 5,
                'description' => 'Inverter Start',
            ],
            [
                'status_id' => 6,
                'description' => 'Run',
            ],
            [
                'status_id' => 7,
                'description' => 'Recovery',
            ],
            [
                'status_id' => 8,
                'description' => 'Pause',
            ],
            [
                'status_id' => 9,
                'description' => 'OTH Fault',
            ],
            [
                'status_id' => 10,
                'description' => 'OTH Fault',
            ],
            [
                'status_id' => 11,
                'description' => 'Address Setting ',
            ],
            [
                'status_id' => 12,
                'description' => 'Self Test ',
            ],
            [
                'status_id' => 13,
                'description' => 'Self Test Fail ',
            ],
            [
                'status_id' => 14,
                'description' => 'Sensor Test + Meas.Riso ',
            ],
            [
                'status_id' => 15,
                'description' => 'Leak Fault ',
            ],
            [
                'status_id' => 16,
                'description' => 'Waiting for manual reset',
            ],
            [
                'status_id' => 17,
                'description' => 'Internal Error E026 ',
            ],
            [
                'status_id' => 18,
                'description' => 'Internal Error E027',
            ],
            [
                'status_id' => 19,
                'description' => 'Internal Error E028 ',
            ],
            [
                'status_id' => 20,
                'description' => 'Internal Error E029',
            ],
            [
                'status_id' => 21,
                'description' => 'Internal Error E030 ',
            ],
            [
                'status_id' => 22,
                'description' => 'Sending Wind Table',
            ],
            [
                'status_id' => 23,
                'description' => 'Failed Sending table',
            ],
            [
                'status_id' => 24,
                'description' => 'UTH Fault',
            ],
            [
                'status_id' => 25,
                'description' => 'Remote OFF',
            ],
            [
                'status_id' => 26,
                'description' => 'Interlock Fail',
            ],
            [
                'status_id' => 27,
                'description' => 'Executing Autotest',
            ],
            [
                'status_id' => 30,
                'description' => 'Waiting Sun',
            ],
            [
                'status_id' => 31,
                'description' => 'Temperature Fault',
            ],
            [
                'status_id' => 32,
                'description' => 'Fan Staucked',
            ],
            [
                'status_id' => 33,
                'description' => 'Int. Com. Fault',
            ],
            [
                'status_id' => 34,
                'description' => 'Slave Insertion',
            ],
            [
                'status_id' => 35,
                'description' => 'DC Switch Open',
            ],
            [
                'status_id' => 36,
                'description' => 'TRAS Switch Open',
            ],
            [
                'status_id' => 37,
                'description' => 'MASTER Exclusion',
            ],
            [
                'status_id' => 38,
                'description' => 'Auto Exclusion',
            ],
            [
                'status_id' => 98,
                'description' => 'Erasing Internal EEprom',
            ],
            [
                'status_id' => 99,
                'description' => 'Erasing External EEprom',
            ],
            [
                'status_id' => 100,
                'description' => 'Counting EEprom',
            ],
            [
                'status_id' => 101,
                'description' => 'Freeze',
            ],
        ];
        DB::table('inversor_status')->delete();

        foreach ($data as $key) {
            Inversor::create($key);
        }
    }
}

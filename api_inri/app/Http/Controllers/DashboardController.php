<?php

namespace App\Http\Controllers;

use App\Models\BatteryVoltage;
use App\Models\Power;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $batteryVoltage = DB::table('battery_voltages')->orderBy('id', 'DESC')->first();;
        $power = DB::table('powers')->orderBy('id', 'DESC')->first();
        $windLateral = DB::table('wind_laterals')->orderBy('id', 'DESC')->first();
        $windTop = DB::table('wind_tops')->orderBy('id', 'DESC')->first();
        $totalEnergy = DB::table('total_energies')->orderBy('id', 'DESC')->first();

        return response()->json([
            'data' => [
                'battery_voltage' => $batteryVoltage,
                'power' => $power,
                'wind_top' => $windTop,
                'wind_lateral' => $windLateral,
                'total_energy' => $totalEnergy
            ]
        ]);
    }

    public function status()
    {
        $inversor = DB::table('inversor_status')->orderBy('id', 'DESC')->first();
        $power_grid = DB::table('power_grid_status')->orderBy('id', 'DESC')->first();
        return response()->json([
            'data' => [
                'inversor_status' => $inversor,
                'power_grid_status' => $power_grid
            ]
        ]);
    }
}

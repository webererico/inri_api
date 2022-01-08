<?php

namespace App\Http\Controllers;

use App\Models\BatteryVoltage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $batteryVoltage = BatteryVoltage::latest()->first();

        return response()->json([
            'data' => [
                'battery_voltage' => $batteryVoltage,
                'inversor_status' => [
                    'status' => true,
                    'date' => '2022-01-07 19:23:12'
                ],
                'power_grid_status' => [
                    'status' => true,
                    'date' => '2022-01-07 19:23:12'
                ]
            ]
        ]);
    }
}

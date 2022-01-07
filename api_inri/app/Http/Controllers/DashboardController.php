<?php

namespace App\Http\Controllers;

use App\Models\BatteryVoltage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $batteryVoltage = BatteryVoltage::latest()->first();

        return response()->json([
            'data' => [
                'battery_voltage' => $batteryVoltage,
            ]
        ]);
    }
}

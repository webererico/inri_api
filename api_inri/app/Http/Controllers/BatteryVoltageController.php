<?php

namespace App\Http\Controllers;

use App\Models\BatteryVoltage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BatteryVoltageController extends Controller
{
    public function index(Request $request)
    {
        if ($request['start_date'] != null && $request['end_date'] != null) {
            $start = Carbon::parse($request['start_date']);
            $end = Carbon::parse($request['end_date']);
            $batteryVoltages = BatteryVoltage::whereBetween('created_at', [$start, $end])->get();
        } else {
            $batteryVoltages = BatteryVoltage::all();
        }

        return response()->json([
            'data' => $batteryVoltages,
            'count' => count($batteryVoltages) > 0  ? count($batteryVoltages) : 0
        ]);
    }
}

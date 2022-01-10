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
            $data = BatteryVoltage::whereBetween('created_at', [$start, $end])->limit(100)->get();
        } else {
            $data = BatteryVoltage::limit(100)->get();
        }

        return response()->json([
            'data' => $data,
            'count' => count($data) > 0  ? count($data) : 0
        ]);
    }
}

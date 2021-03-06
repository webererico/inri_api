<?php

namespace App\Http\Controllers;

use App\Models\BatteryVoltage;
use App\Models\Inversor;
use App\Models\Power;
use App\Models\TotalEnergy;
use App\Models\User;
use App\Models\WindLateral;
use App\Models\WindTop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $batteryVoltage = DB::table('battery_voltage')->orderBy('id', 'DESC')->first();;
        $power = DB::table('measured_power')->orderBy('id', 'DESC')->first();
        $windLateral = DB::table('wind_speed_lateral')->orderBy('id', 'DESC')->first();
        $windTop = DB::table('wind_speed_top')->orderBy('id', 'DESC')->first();
        $totalEnergy = DB::table('total_energy')->orderBy('id', 'DESC')->first();
        $windDirection = DB::table('wind_direction')->orderBy('id', 'DESC')->first();
        return response()->json([
            'data' => [
                'battery_voltage' => $batteryVoltage,
                'power' => $power,
                'wind_top' => $windTop,
                'wind_lateral' => $windLateral,
                'wind_direction' => $windDirection,
                'total_energy' => $totalEnergy
            ]
        ]);
    }

    public function status()
    {
        $power = DB::table('measured_power')->orderBy('id', 'DESC')->first();
        $inversor = Inversor::find($power->status_id);
        $station = DB::table('weather_station_status')->orderBy('id', 'DESC')->first();
        return response()->json([
            'data' => [
                'inversor_status' => $inversor,
                'station_status' => $station
            ]
        ]);
    }

    public function export(Request $request)
    {

        $tableName = $request['variable_name'];
        $startDate = $request['start_date'];
        $endDate = $request['end_date'];
        $data = [];
        switch ($tableName) {
            case $tableName == 'Battery Voltage':
                $data = BatteryVoltage::whereBetween('created_at', [$startDate, $endDate])->get();;
                break;
            case $tableName == 'Wind Speed Lateral':
                $data = WindLateral::whereBetween('created_at', [$startDate, $endDate])->get();;
                break;
            case $tableName == 'Wind Speed Top':
                $data = WindTop::whereBetween('created_at', [$startDate, $endDate])->get();;
                break;
                // case $tableName == 'Wind Direction':
                // $data = WindTop::whereBetween('created_at', [$startDate, $endDate])->get();
                break;
            case $tableName == 'Total Acumulated Energy':
                $data = TotalEnergy::whereBetween('created_at', [$startDate, $endDate])->get();;
                break;
            case $tableName == 'Measured Power':
                $data = Power::whereBetween('created_at', [$startDate, $endDate])->get();;
                break;
        }

        return response()->json([
            'data' => $data,
            'count' => count($data) > 0  ? count($data) : 0
        ]);
    }
}

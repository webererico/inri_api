<?php

namespace App\Http\Controllers;

use App\Models\BatteryVoltage;
use App\Models\Inverso;
use App\Models\Inversor;
use App\Models\Power;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InversoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $limit = $request['limit'] ?? 1440;
        if ($request['start_date'] != null && $request['end_date'] != null) {
            $start = Carbon::parse($request['start_date']);
            $end = Carbon::parse($request['end_date']);
            $data = Power::whereBetween('created_at', [$start, $end])->pluck('status_id')->get();
        } else {
            $data = Power::all()->take(-$limit);
        }

        $status = [];
        foreach ($data as $value) {
            $newValue  = array(
                "status" => true,
                "description" => Inversor::find($value->status_id)->description,
                "created_at" => $value->created_at,
                "updated_at" => $value->update_at
            );
            array_push($status, $newValue);
        }

        return response()->json([
            'data' => $status,
            'count' => count($data) > 0  ? count($data) : 0
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inverso  $inverso
     * @return \Illuminate\Http\Response
     */
    public function show(Inversor $inverso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inverso  $inverso
     * @return \Illuminate\Http\Response
     */
    public function edit(Inversor $inverso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inverso  $inverso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inversor $inverso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inverso  $inverso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inversor $inverso)
    {
        //
    }
}

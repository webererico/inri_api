<?php

namespace App\Http\Controllers;

use App\Models\TotalEnergy;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TotalEnergyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request['start_date'] != null && $request['end_date'] != null) {
            $start = Carbon::parse($request['start_date']);
            $end = Carbon::parse($request['end_date']);
            $data = TotalEnergy::whereBetween('created_at', [$start, $end])->get();
        } else {
            $data = TotalEnergy::limit(100)->get();
        }

        return response()->json([
            'data' => $data,
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
     * @param  \App\Models\TotalEnergy  $totalEnergy
     * @return \Illuminate\Http\Response
     */
    public function show(TotalEnergy $totalEnergy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TotalEnergy  $totalEnergy
     * @return \Illuminate\Http\Response
     */
    public function edit(TotalEnergy $totalEnergy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TotalEnergy  $totalEnergy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TotalEnergy $totalEnergy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TotalEnergy  $totalEnergy
     * @return \Illuminate\Http\Response
     */
    public function destroy(TotalEnergy $totalEnergy)
    {
        //
    }
}

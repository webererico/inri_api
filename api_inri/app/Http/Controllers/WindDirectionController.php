<?php

namespace App\Http\Controllers;

use App\Models\WindDirection;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WindDirectionController extends Controller
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
            $data = WindDirection::whereBetween('created_at', [$start, $end])->get();
        } else {
            $data = WindDirection::all()->take(-$limit);
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
     * @param  \App\Models\WindDirection  $windDirection
     * @return \Illuminate\Http\Response
     */
    public function show(WindDirection $windDirection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WindDirection  $windDirection
     * @return \Illuminate\Http\Response
     */
    public function edit(WindDirection $windDirection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WindDirection  $windDirection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WindDirection $windDirection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WindDirection  $windDirection
     * @return \Illuminate\Http\Response
     */
    public function destroy(WindDirection $windDirection)
    {
        //
    }
}

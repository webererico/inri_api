<?php

namespace App\Http\Controllers;

use App\Models\WindLateral;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WindLateralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $limit = $request['limit'] ?? 60;
        if ($request['start_date'] != null && $request['end_date'] != null) {
            $start = Carbon::parse($request['start_date']);
            $end = Carbon::parse($request['end_date']);
            $data = WindLateral::whereBetween('created_at', [$start, $end])->get();
        } else {
            $data = WindLateral::all()->take(-$limit);
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
     * @param  \App\Models\WindLateral  $windLateral
     * @return \Illuminate\Http\Response
     */
    public function show(WindLateral $windLateral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WindLateral  $windLateral
     * @return \Illuminate\Http\Response
     */
    public function edit(WindLateral $windLateral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WindLateral  $windLateral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WindLateral $windLateral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WindLateral  $windLateral
     * @return \Illuminate\Http\Response
     */
    public function destroy(WindLateral $windLateral)
    {
        //
    }
}
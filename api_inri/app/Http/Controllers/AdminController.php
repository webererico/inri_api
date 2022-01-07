<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index (Request $request) {
        if ($request->user()->is_admin){
            return User::all();
        } else {
            return response()->json([
                'message' => 'You don\'t have permission',
            ],405);
        }
    }


}

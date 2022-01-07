<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(Request $request)
    {
        return $request->user();
    }

    public function store(Request $request)
    {
        $user = User::where('email', $request['email'])->firstOrFail();
        if ($request['name']) {
            $user->name = $request['name'];
        }

        if ($request['email']) {
            $user->email = $request['email'];
        }

        if ($request['occupation']) {
            $user->occupation = $request['occupation'];
        }

        if ($request['course']) {
            $user->occupation = $request['course'];
        }

        if ($request['contact_number']) {
            $user->contact_number = $request['contact_number'];
        }
        $user->save();

        return response()->json([
            'message' => 'Profile Updated',
            'data' => $user,
        ]);
    }
}

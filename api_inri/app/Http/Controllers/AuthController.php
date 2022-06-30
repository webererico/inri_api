<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'course' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'register_key' => 'required|max:255|in:inrikey'
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'occupation' => $validatedData['occupation'],
            'contact_number' => $validatedData['contact_number'],
            'course' => $validatedData['course'],
            'password' => Hash::make($validatedData['password']),
            'is_admin' => false,
        ]);


        return response()->json([
            'message' => 'User Created',
            'token_type' => 'Bearer',
        ]);
    }
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login credentials'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'data' => $user
        ]);
    }

    public function me(Request $request)
    {
        return $request->user();
    }

    public function changePassword(Request $request)
    {
        $validatedData = $request->validate([
            'current_password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8',
        ]);

        $user = $request->user();
        if (Hash::check($validatedData['current_password'], $user->password)) {
            $user->password = Hash::make($validatedData['new_password']);
            $user->save();

            return response()->json([
                'message' => 'Password Updated.',
            ]);
        } else {
            return response()->json([
                'message' => 'Wrong Password',
            ], 403);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logout success'
        ]);
    }

    public function delete(Request $request)
    {
        $request->user()->delete();
        return response()->json([
            'message' => 'Delete success'
        ]);
    }
}

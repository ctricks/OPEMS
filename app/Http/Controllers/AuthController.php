<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        
        $user = auth()->user();

        if ($user) {
             $user->tokens()->delete();
        }

         $user = User::where('email', $data['email'])->first();


        if (!$user || !Hash::check($data['password'], $user->password)) {
            Auth::guard('sanctum')->user();
            return response([
                'msg' => 'incorrect username or password'
            ], 401);
        }

        $token = $user->createToken('apiToken')->plainTextToken;

        $res = [
            'user' => $user,
            'token' => $token
        ];

        return response($res, 201);
    }
    public function logout(Request $request)
    {
       $user = Auth::guard('sanctum')->user();

        if (!$user) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        try {
            // Revoke all tokens for the authenticated user
            $user->tokens()->delete();
        } catch (\Exception $e) {
            // Log the exception for investigation
            Log::error('Token revocation failed: ' . $e->getMessage());

            return response()->json(['error' => 'Unable to revoke tokens'], 500);
        }

        return response()->json(['message' => 'Tokens revoked successfully'],200);
    }
}

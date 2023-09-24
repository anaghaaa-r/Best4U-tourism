<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // login
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials))
        {
            $user = Auth::user();

            if($user->isAdmin)
            {
                $role = 'admin';

                return response()->json([
                    'status' => true,
                    'message' => 'Logged in successfully.',
                    'currentusername' => $user->username,
                    'role' => $role
                ], 200);
            }
            else
            {
                $role = 'user';

                return response()->json([
                    'status' => false,
                    'message' => 'Access denied. Not authorized as admin.',
                    'role' => $role
                ], 403);
            }
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => 'Invalid Credentials.'
            ], 401);
        }
    }

    // logout
    public function logout()
    {
        if(Auth::check())
        {
            Auth::logout();
            
            return response()->json([
                'status' => true,
                'message' => 'Logging Out.'
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => 'Login In again.'
            ], 400);
        }
    }
}

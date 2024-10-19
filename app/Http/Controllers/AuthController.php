<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function loginPage()
    {
        return view('authentication.login');
    }

    public function registerPage()
    {
        return view('authentication.register');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return view('index');
    }

    public function registerUser(Request $req)
    {
        try {
            $data = $req->only([
                'email',
                'name',
                'password'
            ]);

            $exist = User::where('email', '=', $data['email'])->first();

            if ($exist != null) {
                return response()->json([
                    'status' => 1,
                    'message' => 'Account Already Exists'
                ], 422);
            }

            User::create($data);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 1,
                'message' => $e
            ], 422);
        }

        return redirect()->route('login');
    }

    public function loginUser(Request $req)
    {
        try {
            $data = $req->only([
                'email',
                'password'
            ]);

            $userData = User::where('email', '=', $data['email'])->first();
            // if(!isset($exist))
            // {
            //     $userData = User::where('email', '=', $data['email'])->get();
            // } *Untuk company*
            // dd($userData->toArray());
            if (!$userData || $data['password'] !== $userData['password']) {
                return response()->json([
                    'status' => 1,
                    'message' => 'Invalid credentials. Please try again.'
                ], 422);
            }

            Auth::login($userData);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 1,
                'message' => $e
            ], 422);
        }
        return redirect()->route('dashboard.home');
    }
}

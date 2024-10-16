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

    public function registerUser(Request $req)
    {
        try {
            $data = $req->only([
                'email',
                'name',
                'password'
            ]);

            $exist = User::where('email', '=', $data['email'])->get();
            if (!isset($exist)) {
                return response()->json(['status' => 1, 'message' => 'Account Already Exists']);
            }

            User::create($data);
        } catch (\Exception $e) {
            throw $e;
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
                    'status' => 0,
                    'message' => 'Invalid credentials. Please try again.'
                ], 401);
            }

            Auth::login($userData);
        } catch (\Exception $e) {
            throw $e;
        }
        return redirect()->route('dashboard.home');
    }
}

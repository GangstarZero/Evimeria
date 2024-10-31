<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function loginPage()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return view('authentication.login');
    }

    public function registerPage()
    {
        return view('authentication.register');
    }

    public function registerCompanyPage(){
        return view('authentication.registerCompany');
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

    public function registerCompany(Request $req)
    {
        try{
            $data = $req->only([
                'name',
                'address',
                'description',
                'email',
                'password'
            ]);

            $exist = Company::where('email', '=', $data['email'])->first();

            if ($exist != null) {
                return response()->json([
                    'status' => 1,
                    'message' => 'Account Already Exists'
                ], 422);
            }

            Company::create($data);


        } catch(\Exception $e)
        {
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

            if (!$userData) {
                $userData = Company::where('email', '=', $data['email'])->first();

                if (!$userData || $data['password'] !== $userData['password']) {
                    return response()->json([
                        'status' => 1,
                        'message' => 'Invalid credentials. Please try again.'
                    ], 422);
                }

                Auth::guard('company')->login($userData);
                return response()->json([
                    'status' => 0,
                    'message' => 'Login successful!',
                    'redirect_url' => route('company.job.indexPage')
                ]);
            } else {
                if ($data['password'] !== $userData['password']) {
                    return response()->json([
                        'status' => 1,
                        'message' => 'Invalid credentials. Please try again.'
                    ], 422);
                }

                Auth::login($userData);
                return response()->json([
                    'status' => 0,
                    'message' => 'Login successful!',
                    'redirect_url' => route('dashboard.home')
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 1,
                'message' => $e->getMessage()
            ], 422);
        }
    }
}

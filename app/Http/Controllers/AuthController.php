<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController{
    public function loginPage(){
        return view('authentication.login');
    }

    public function registerPage(){
        return view('authentication.register');
    }

    public function registerUser(Request $req){
        try {
            $data = $req->only([
                'email',
                'name',
                'password'
            ]);

            $exist = User::where('email','=', $data['email'])->get();
            if(!isset($exist)){
                return response()->json(['status' => 1, 'message' => 'Account Already Exists']);
            }

            User::create($data);
        } catch (\Exception $e) {
            throw $e;
        }

        return response()->json(['status' => 0, 'message' => 'Successfully created']);
    }
}
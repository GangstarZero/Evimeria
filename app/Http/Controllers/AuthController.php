<?php

namespace App\Http\Controllers;

class AuthController{
    public function loginPage(){
        return view('authentication.login');
    }
}
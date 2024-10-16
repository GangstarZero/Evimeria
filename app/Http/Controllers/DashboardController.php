<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController
{
   public function index()
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }
}
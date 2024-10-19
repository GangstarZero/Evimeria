<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index(){

    }

    public function getAllTitle(){
        $titleList = Title::get();
        return $titleList;
    }
}

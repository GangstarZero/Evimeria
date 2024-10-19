<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function indexPage(){
        $jobList = Job::with('title')->with('company')->get();
        return view('job/index', compact('jobList'));
    }

    public function addPage(){
        return view('job/add');
    }

    public function detailPage($id){
        $job = Job::with('title')->with('company')->find($id);
        return view('job/detail', compact('job'));
    }

    public function insertJob(Request $req){

        $data = $req->only([
            'companyId',
            'titleId',
            'description',
            'poster'
        ]);
        Job::create($data);

    }
}

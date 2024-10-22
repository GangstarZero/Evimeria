<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{

    // GUEST
    public function guestIndexPage(){
        $jobList = Job::get();
        return view('job/guest/index', compact('jobList'));
    }

    public function guestDetailPage($id){
        $job = Job::with(['title', 'company'])->find($id);
        return view('job/guest/detail', compact('job'));
    }





    // USER
    public function userIndexPage(){
        $jobList = Job::get();
        return view('job/user/index', compact('jobList'));
    }

    public function userDetailPage($id){
        $userId = Auth::user()->id;
        $job = Job::with(['title', 'company'])->find($id);
        return view('job/user/detail', compact('job'), compact('userId'));
    }





    // COMPANY
    public function companyIndexPage(){
        $userId = Auth::user()->id;
        $jobList = Job::where('companyId', $userId)->get();
        return view('job/company/index', compact('jobList'));
    }

    public function companyDetailPage($id){
        $job = Job::with(['title', 'company'])->find($id);
        return view('job/company/detail', compact('job'));
    }

    public function companyAddPage(){
        $userId = Auth::user()->id;
        $titleList = Title::get();
        return view('job/company/add', compact('titleList'), compact('userId'));
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

    public function deleteJob($id){

        $job = Job::find($id);
        $job->delete();

    }
}

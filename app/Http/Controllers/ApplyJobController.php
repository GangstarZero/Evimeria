<?php

namespace App\Http\Controllers;

use App\Models\ApplyJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyJobController extends Controller
{
    public function historyPage(){
        $userId = Auth::user()->id;
        $applyJobList = ApplyJob::with(['job.title', 'job.company'])->where('userId', $userId)->get();
        return view('user.history', compact('applyJobList'));
    }

    public function insertApplyJob(Request $req){

        $data = $req->only([
            'jobId',
            'userId',
            'fullName',
            'phoneNumber',
            'salaryExpectation',
            'cv',
            'status'
        ]);
        ApplyJob::create($data);

    }

    public function updateApplyJob(Request $req){
        $applyJob = ApplyJob::find($req->id);
        $applyJob->status = $req->status; 
        $applyJob->save();
    }
}

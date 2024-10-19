<?php

namespace App\Http\Controllers;

use App\Models\ApplyJob;
use Illuminate\Http\Request;

class ApplyJobController extends Controller
{
    public function insertApplyJob(Request $req){

        $data = $req->only([
            'jobId',
            'userId',
            'fullName',
            'phoneNumber',
            'salaryExpectation',
            'cv'
        ]);
        ApplyJob::create($data);

    }
}

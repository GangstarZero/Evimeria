<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Title;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function indexPage(Request $req){
        $query = $req->query('query') == null ? "" : $req->query('query');
        // $jobList = Title::where('name', 'like', '%'. $query .'%');
        // $jobList = Job::with(['company', 'title' => function ($q) {
        //     $q->where('name', 'like', '%' . $query . '%');
        // }])->get();
        return view('job/index', compact('jobList'), compact('query'));
    }

    public function addPage(){
        $titleList = Title::get();
        return view('job/add', compact('titleList'));
    }

    public function detailPage($id){
        $job = Job::with(['title', 'company'])->find($id);
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

    public function deleteJob($id){

        $job = Job::find($id);
        $job->delete();

    }
}

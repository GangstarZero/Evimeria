<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Title;
use App\Models\ApplyJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    // GUEST
    public function guestIndexPage(Request $req)
    {
        $query = $req->query('query') ?? "";
        $jobList = Job::whereHas('title', function ($job) use ($query) {
            $job->where('name', 'LIKE', '%' . $query . '%');
        })->get();
        return view('job/guest/index', compact('jobList', 'query'));
    }

    public function guestDetailPage($id)
    {
        $job = Job::with(['title', 'company'])->find($id);
        return view('job/guest/detail', compact('job'));
    }

    // USER
    public function userIndexPage(Request $req)
    {
        $query = $req->query('query') ?? "";
        $jobList = Job::whereHas('title', function ($job) use ($query) {
            $job->where('name', 'LIKE', '%' . $query . '%');
        })->get();
        return view('job/user/index', compact('jobList', 'query'));
    }

    public function userDetailPage($id)
    {
        $userId = Auth::user()->id;
        $job = Job::with(['title', 'company'])->find($id);
        return view('job/user/detail', compact('job', 'userId'));
    }

    // COMPANY
    public function companyIndexPage(Request $req)
    {
        $userId = Auth::user()->id;
        $query = $req->query('query') ?? "";
        $jobList = Job::whereHas('title', function ($job) use ($query) {
            $job->where('name', 'LIKE', '%' . $query . '%');
        })->where('companyId', $userId)->get();
        return view('job/company/index', compact('jobList', 'query'));
    }

    public function companyDetailPage($id)
    {
        $job = Job::with(['title', 'company'])->find($id);
        $applyJobList = ApplyJob::where('jobId', $id)->where('status', 'Applied')->get();
        return view('job/company/detail', compact('job', 'applyJobList'));
    }

    public function companyAddPage()
    {
        $userId = Auth::user()->id;
        $titleList = Title::get();
        return view('job/company/add', compact('titleList', 'userId'));
    }

    public function companyEditPage($id)
    {
        $job = Job::with(['title', 'company'])->find($id);

        return view('job/company/edit', compact('job'));
    }

    public function insertJob(Request $req)
    {

        $data = $req->only([
            'companyId',
            'titleId',
            'description',
        ]);

        if ($req->hasFile('poster') && $req->file('poster')->isValid()) {
            $posterFile = $req->file('poster');
            $posterPath = 'assets/poster';
            $posterName = $posterFile->getClientOriginalName();

            $posterFile->move(public_path($posterPath), $posterName);

            $data['poster'] = "$posterPath/$posterName";
        }

        Job::create($data);
    }

   public function updateJob(Request $req)
{
    $validatedData = $req->validate([
        'jobId' => 'required',
        'description' => 'required|string|max:2000', 
        'poster' => 'nullable', 
    ]);

    $job = Job::find($validatedData['jobId']);
    if (!$job) {
        return response()->json(['message' => 'Job not found'], 404);
    }

    $job->description = $validatedData['description'];

    if ($req->hasFile('poster') && $req->file('poster')->isValid()) {
        $posterFile = $req->file('poster');
        $posterPath = 'assets/poster';
        $posterName = $posterFile->getClientOriginalName();

        $posterFile->move(public_path($posterPath), $posterName);

        $job->poster = "$posterPath/$posterName";
    }

    $job->save();

    return response()->json([
        'message' => 'Job updated successfully',
        'job' => $job,
    ], 200);
}

}

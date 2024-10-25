<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ApplyJob extends Model
{
    use HasFactory;

    protected $table = 'apply_job';
    protected $primaryKey = 'id';
    protected $fillable = [
        'jobId',
        'userId',
        'fullName',
        'phoneNumber',
        'salaryExpectation',
        'cv',
        'status'
    ];

    public function job(): HasOne
    {
        return $this->hasOne(Job::class, 'id', 'jobId');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'userId');
    }

}

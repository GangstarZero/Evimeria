<?php

namespace App\Models;

use App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Title extends Model
{
    use HasFactory;

    protected $table = 'title';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'titleId');
    }
}

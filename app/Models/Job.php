<?php

namespace App\Models;

use App\Models\Title;
use App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job';
    protected $primaryKey = 'id';
    protected $fillable = [
        'companyId',
        'titleId',
        'description',
        'poster'
    ];

    public function company(): HasOne
    {
        return $this->hasOne(Company::class, 'id', 'companyId');
    }

    public function title(): HasOne
    {
        return $this->hasOne(Title::class, 'id', 'titleId');
    }

}

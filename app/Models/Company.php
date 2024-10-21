<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Authenticatable
{
    use HasFactory;

    protected $table = 'company';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'email',
        'name',
        'password',
        'address',
        'description'
    ];
}

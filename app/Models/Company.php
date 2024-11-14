<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    protected $hidden = [
        'remember_token'
    ];

    public function chat_rooms(): HasMany
    {
        return $this->hasMany(ChatRoom::class);
    }

}

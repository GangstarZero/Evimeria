<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'chat';
    protected $fillable = [
        'chat_room_id',
        'is_sender_user',
        'content'
    ];

    public function chat_room(): BelongsTo
    {
        return $this->belongsTo(ChatRoom::class);
    }
}

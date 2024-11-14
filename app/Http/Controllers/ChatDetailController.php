<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatRoom;
use Illuminate\Http\Request;

class ChatDetailController extends Controller
{
    public function indexUser($id) {
        $chat_room = ChatRoom::find($id);
        return view('user.chatDetail', compact('chat_room'));
    }

    public function indexCompany($id) {
        $chat_room = ChatRoom::find($id);
        return view('company.chatDetail', compact('chat_room'));
    }

    public function createChat(Request $req) {
        $chat = $req->only([
            'chat_room_id',
            'is_sender_user',
            'content'
        ]);
        Chat::create($chat);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function indexUser() {
        $id = Auth::user()->id;
        $chat_rooms = ChatRoom::where('user_id', $id)
            ->orWhere('company_id', $id)
            ->get();
        return view('user.chat', compact('chat_rooms'));
    }

    public function indexCompany() {
        $id = Auth::user()->id;
        $chat_rooms = ChatRoom::where('user_id', $id)
            ->orWhere('company_id', $id)
            ->get();
        return view('company.chat', compact('chat_rooms'));
    }

    public function createChatRoom(Request $req) {
        $temp = $req->only([
            'user_id',
            'company_id'
        ]);

        $chat = Chat::find($temp);

        if(!$chat) {
            ChatRoom::create($temp);
        }

    }
}

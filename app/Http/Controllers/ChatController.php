<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function indexUser() {
        $id = Auth::user()->id;
        $chat_rooms = ChatRoom::where('user_id', $id)->get();
        return view('user.chat', compact('chat_rooms'));
    }

    public function indexCompany() {
        $id = Auth::user()->id;
        $chat_rooms = ChatRoom::where('company_id', $id)->get();
        return view('company.chat', compact('chat_rooms'));
    }

    public function createChatRoom(Request $req) {
        $temp = $req->only([
            'user_id',
            'company_id'
        ]);

        $chat_room = ChatRoom::where('user_id', $req->user_id)
            ->where('company_id', $req->company_id)
            ->count();

        if($chat_room == 0) {
            ChatRoom::create($temp);
        }

    }
}

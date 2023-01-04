<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Recruit;
use App\Models\Chat;

class ChatController extends Controller
{
    public function chat_store(Request $request, Chat $chat, Recruit $recruit)
    {
        $input = $request['chat'];
        $userId = Auth::id();
        $chat->user_id = $userId;
        $chat->fill($input)->save();
        return redirect('/index');
    }
}

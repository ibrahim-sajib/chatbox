<?php

namespace App\Http\Controllers;

use App\Contract\Repositories\ChatMessagesRepositoryInterface;
use App\Events\MessageSent;
use App\Http\Controllers\Controller;
use App\Models\ChatMessages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index(User $user, ChatMessagesRepositoryInterface $chatMessagesRepository)
    {
        $messages = $chatMessagesRepository->getChatMessages($user);
        return response()->json($messages);
    }

    public function store(User $user, Request $request)
    {
        $message = ChatMessages::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $user->id,
            'text' => $request->message,
        ]);
        broadcast(new MessageSent($user, $message))->toOthers();
        return response()->json($message);
    }
}
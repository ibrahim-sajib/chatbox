<?php

namespace App\Http\Controllers;

use App\Contract\Repositories\ChatMessagesRepositoryInterface;
use App\Events\MessageSent;
use App\Http\Controllers\Controller;
use App\Http\Requests\SendMessageRequest;
use App\Models\ChatMessages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
   public $chatMessagesRepository;
   public function __construct(ChatMessagesRepositoryInterface $chatMessagesRepository)
    {
        $this->chatMessagesRepository = $chatMessagesRepository;
    }
    

    public function index(User $user)
    {
        $messages = $this->chatMessagesRepository->getChatMessages($user);
        return response()->json($messages);
    }

    public function store(User $user, SendMessageRequest $request)
    {
        $payload = $request->validated();
        $message = $this->chatMessagesRepository->storeChatMessage($user, $payload);
        
        broadcast(new MessageSent($user, $message))->toOthers();
        return response()->json($message);
    }
}
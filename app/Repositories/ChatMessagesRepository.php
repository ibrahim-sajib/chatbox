<?php

namespace App\Repositories;

use App\Contract\Repositories\ChatMessagesRepositoryInterface;
use App\Models\ChatMessages;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ChatMessagesRepository extends BaseRepository implements ChatMessagesRepositoryInterface
{
    public function __construct(ChatMessages $model)
    {
        parent::__construct($model);
    }

    public function create(array $payload): Model
    {
        $user = $this->model->create($payload);

        return $user->refresh();
    }

    public function getChatMessages(User $user)
    {
        return $this->model->with(['sender', 'receiver'])
            ->whereIn('sender_id', [Auth::id(), $user->id])
            ->whereIn('receiver_id', [Auth::id(), $user->id])
            ->get();
    }
}

<?php

namespace App\Contract\Repositories;

use App\Models\User;

interface ChatMessagesRepositoryInterface extends BaseRepositoryInterface
{
    public function getChatMessages(User $user);
}

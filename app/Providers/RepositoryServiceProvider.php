<?php

namespace App\Providers;

use App\Contract\Repositories\ChatMessagesRepositoryInterface;
use App\Contract\Repositories\UserRepositoryInterface;
use App\Repositories\ChatMessagesRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ChatMessagesRepositoryInterface::class, ChatMessagesRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

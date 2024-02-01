<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\IBaseRepository;
use App\Repositories\Interfaces\IPostRepository;
use App\Repositories\Interfaces\ITagRepository;
use App\Repositories\Interfaces\ITopicRepository;
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use App\Repositories\TopicRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(IBaseRepository::class, BaseRepository::class);
        $this->app->bind(IPostRepository::class, PostRepository::class);
        $this->app->bind(ITagRepository::class, TagRepository::class);
        $this->app->bind(ITopicRepository::class, TopicRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

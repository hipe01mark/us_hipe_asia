<?php

namespace App\Services\Interfaces;

use Canvas\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface ICanvasService
{
    /**
     * Get posts by slug topic
     */
    public function getPaginatedPostsBySlugTopic(
        string $slugTopic,
        string $tag = null,
        int $numberPerPage = 6
    ): LengthAwarePaginator;

    /**
     * Get latest 3 recent posts by slug topic
     */
    public function getRecentPostsBySlugTopic(
        string $slugTopic, 
        int $numberTake = null
    ): Collection;

    /**
     * Find post by slug
     */
    public function findPostBySlug(String $slug) : Post;

    /**
     * Get tags with speicfic number take.
     */
    public function getTags(int $numberTake = null): Collection;
}

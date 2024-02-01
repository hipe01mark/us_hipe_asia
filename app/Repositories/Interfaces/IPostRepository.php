<?php

namespace App\Repositories\Interfaces;

use Canvas\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface IPostRepository extends IBaseRepository {
    /**
     * Get the query of posts by slug topic
     */
    public function getBySlugTopicQuery(
        string $slugTopic,
        string $slugTag = null,
        int $numberTake = null
    ): Builder;

    /**
     * Get paginated posts by slug topic
     */
    public function getPaginatedPostsBySlugTopic(
        string $slugTopic,
        string $slugTag = null,
        int $numberPerPage = 6
    ): LengthAwarePaginator;

    /**
     * Get recent posts by slug topic
     */
    public function getRecentPostsBySlugTopic(
        string $slugTopic, 
        int $numberTake = null
    ): Collection;

    /**
     * Get recent posts by slug topic
     */
    public function findBySlug(String $slug): Post;
}

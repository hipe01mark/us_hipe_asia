<?php

namespace App\Services;

use App\Repositories\Interfaces\IPostRepository;
use App\Repositories\Interfaces\ITagRepository;
use App\Services\Interfaces\ICanvasService;
use Canvas\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class CanvasService implements ICanvasService
{
    public $post;
    public $tag;

    /**
     * Constructor
     */
    public function __construct(IPostRepository $post, ITagRepository $tag)
    {
        $this->post = $post;
        $this->tag = $tag;
    }

    /**
     * Get paginated posts by slug topic
     */
    public function getPaginatedPostsBySlugTopic(
        string $slugTopic, 
        string $tag = null,
        int $numberPerPage = 6
    ): LengthAwarePaginator
    {
        return $this->post
            ->getPaginatedPostsBySlugTopic($slugTopic, $tag, $numberPerPage);
    }

    /**
     * Get latest 3 recent posts by slug topic
     */
    public function getRecentPostsBySlugTopic(
        string $slugTopic, 
        int $numberTake = null
    ): Collection
    {
        return $this->post
            ->getRecentPostsBySlugTopic($slugTopic, $numberTake);
    }

    /**
     * Find post by slug
     */
    public function findPostBySlug(String $slug): Post
    {
        return $this->post->findBySlug($slug);
    }

    /**
     * Get tags with speicfic number take.
     */
    public function getTags(int $numberTake = null): Collection
    {
        return $this->tag->getAll($numberTake);
    }
}

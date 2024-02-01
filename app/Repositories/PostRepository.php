<?php 

namespace App\Repositories;

use App\Repositories\Interfaces\IPostRepository;
use Canvas\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Pagination\LengthAwarePaginator;

class PostRepository extends BaseRepository implements IPostRepository 
{
    use HasFactory;

    public $model;

     /**
     * constructor.
     */
    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    /**
     * Get the query of posts by slug topic
     */
    public function getBySlugTopicQuery(
        string $slugTopic,
        string $slugTag = null,
        int $numberTake = null
    ): Builder
    {
        return $this->model
            ->with(['topic', 'tags'])
            ->when($slugTopic, function ($post) use ($slugTopic) {
                $post->whereHas('topic', function ($topic) use ($slugTopic) {
                    $topic->whereSlug($slugTopic);
                });
            })
            ->when($slugTag != null, function ($post) use ($slugTag) {
                $post->whereHas('tags', function ($tag) use ($slugTag) {
                    $tag->whereSlug($slugTag);
                });
            })
            ->when($numberTake != null, function ($post) use ($numberTake) {
                $post->take($numberTake);
            });
    }

    /**
     * Get paginated posts by slug topic
     */
    public function getPaginatedPostsBySlugTopic(
        string $slugTopic,
        string $slugTag = null,
        int $numberPerPage = 6
    ): LengthAwarePaginator
    {
        return $this->getBySlugTopicQuery($slugTopic, $slugTag)
            ->paginate($numberPerPage);
    }

    /**
     * Get recent posts by slug topic
     */
    public function getRecentPostsBySlugTopic(
        string $slugTopic, 
        int $numberTake = null
    ): Collection
    {
        return $this->getBySlugTopicQuery($slugTopic, null, $numberTake)
            ->get();
    }

    /**
     * Find post by slug
     */
    public function findBySlug(String $slug): Post
    {
        return $this->model
            ->whereSlug($slug)
            ->first();
    }
}

<?php 

namespace App\Repositories;

use App\Repositories\Interfaces\ITagRepository;
use Canvas\Models\Tag;
use Illuminate\Database\Eloquent\Collection;

class TagRepository extends BaseRepository implements ITagRepository 
{
    public $model;

     /**
     * constructor.
     */
    public function __construct(Tag $model)
    {
        $this->model = $model;
    }

    /**
     * Get tags with specific number take.
     */
    public function getAll(int $numberTake = null): Collection
    {
        return $this->model
            ->when($numberTake, function ($tag) use ($numberTake) {
                $tag->take($numberTake);
            })
            ->latest()
            ->get();
    }
}

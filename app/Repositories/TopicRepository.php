<?php 

namespace App\Repositories;

use App\Repositories\Interfaces\ITopicRepository;
use Canvas\Models\Topic;

class TopicRepository extends BaseRepository implements ITopicRepository 
{
    public $model;

     /**
     * constructor.
     */
    public function __construct(Topic $model)
    {
        $this->model = $model;
    }
}

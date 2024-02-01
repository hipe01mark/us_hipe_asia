<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface ITagRepository extends IBaseRepository {
    /**
     * Get tags with specific number take.
     */
    public function getAll(int $numberTake = null): Collection;
}

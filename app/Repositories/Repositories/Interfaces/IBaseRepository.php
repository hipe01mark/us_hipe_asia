<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface IBaseRepository
{
    /**
     * Gel all models
     */
    public function all(array $columns = ['*'], array $relations = []): Collection;

    /**
     * Get all trashed models
     */
    public function allTrashed(): Collection;

    /**
     * Find model by id
     */
    public function findById(
        int $modelId, 
        array $columns = ['*'], 
        array $relations = []
    ):? Model;

    /**
     * Find items by column name
     */
    public function findItemsByColumnName(
        string $columnName,
        $columnValue,
        array $columns = ['*'], 
        array $relations = []
    ):? Collection;

    /**
     * Find trashed model by id.
     */
    public function findTrashedById(int $modelId):? Model;

    /**
     * Find only trashed model by id.
     */
    public function findOnlyTrashedById(int $modelId):? Model;

    /**
     * Store data.
     */
    public function create(array $payload):? Model;
    
    /**
     * Update or Store data.
     */
    public function updateOrCreate(array $conditionData = null, array $payload):? Model;

    /** 
     * Update existing model.
     */
    public function update(int $modelId, array $payload):? Model;
    
    /**
     * Delete data by id.
     */
    public function deleteById(int $modelId): bool;

    /**
     * Restore data by id.
     */
    public function restoreById(int $modelId):? Model;

    /**
     * Permanently deleted model by id.
     */
    public function permanentlyDeleteById(int $modelId): bool;
}

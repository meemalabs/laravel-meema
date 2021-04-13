<?php

namespace Meema\LaravelMeema\Models;

use Meema\LaravelMeema\Contracts\FavoriteInterface;

class Favorite implements FavoriteInterface
{
    /**
     * List all favorites.
     *
     * @return array
     */
    public function all(): array
    {
        return [];
    }

    /**
     * Get specific favorites.
     *
     * @param array $ids
     *
     * @return array
     */
    public function get($ids = null): array
    {
        return [];
    }

    /**
     * Get specific favorites.
     *
     * @param int $id
     *
     * @return array
     */
    public function find($id): array
    {
        return [];
    }

    /**
     * Create favorite.
     *
     * @param array $data
     *
     * @return array
     */
    public function create($data): array
    {
        return [];
    }

    /**
     * Update favorite.
     *
     * @param int $id
     * @param string $data
     *
     * @return array
     */
    public function update($id, $data): array
    {
        return [];
    }

    /**
     * Delete a favorite.
     *
     * @param array $ids
     *
     * @return null
     */
    public function delete($ids)
    {
        return;
    }
}

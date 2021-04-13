<?php

namespace Meema\LaravelMeema\Contracts;

interface FavoriteInterface
{
    /**
     * List all favorites.
     *
     * @return array
     */
    public function all(): array;

    /**
     * Get specific favorites.
     *
     * @param array $ids
     *
     * @return array
     */
    public function get($ids = null): array;

    /**
     * Get specific favorites.
     *
     * @param int $id
     *
     * @return array
     */
    public function find($id): array;

    /**
     * Create favorite.
     *
     * @param array $data
     *
     * @return array
     */
    public function create($data): array;

    /**
     * Update favorite.
     *
     * @param int $id
     * @param string $data
     *
     * @return array
     */
    public function update($id, $data): array;

    /**
     * Delete a favorite.
     *
     * @param array $ids
     *
     * @return null
     */
    public function delete($ids);
}

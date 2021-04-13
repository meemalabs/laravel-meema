<?php

namespace Meema\LaravelMeema\Contracts;

interface TagInterface
{
    /**
     * List all tags.
     *
     * @return array
     */
    public function all(): array;

    /**
     * Get specific tags.
     *
     * @param array $ids
     *
     * @return array
     */
    public function get($ids = null): array;

    /**
     * Get specific tags.
     *
     * @param int $id
     *
     * @return array
     */
    public function find($id): array;

    /**
     * Update a tag color.
     *
     * @param int $id
     * @param string $color
     *
     * @return array
     */
    public function update($id, $color): array;

    /**
     * Delete tags.
     *
     * @param array $ids
     *
     * @return null
     */
    public function delete($ids);
}

<?php

namespace Meema\LaravelMeema\Models;

use Meema\LaravelMeema\Contracts\TagInterface;

class Tag implements TagInterface
{
    /**
     * List all tags.
     *
     * @return array
     */
    public static function all(): array
    {
        return [];
    }

    /**
     * Get specific tags.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function get($ids = null): array
    {
        return [];
    }

    /**
     * Get specific tags.
     *
     * @param int $id
     *
     * @return array
     */
    public static function find($id): array
    {
        return [];
    }

    /**
     * Update a tag color.
     *
     * @param int $id
     * @param string $color
     *
     * @return array
     */
    public static function update($id, $color): array
    {
        return [];
    }

    /**
     * Delete tags.
     *
     * @param array $ids
     *
     * @return null
     */
    public static function delete($ids)
    {
        return [];
    }
}

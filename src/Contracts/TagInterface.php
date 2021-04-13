<?php

namespace Meema\LaravelMeema\Contracts;

interface TagInterface
{
    /**
     * List all tags.
     *
     * @return array
     */
    public static function all(): array;

    /**
     * Get specific tags.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function get($ids = null): array;

    /**
     * Get specific tags.
     *
     * @param int $id
     *
     * @return array
     */
    public static function find($id): array;

    /**
     * Update a tag color.
     *
     * @param int $id
     * @param string $color
     *
     * @return array
     */
    public static function update($id, $color): array;

    /**
     * Delete tags.
     *
     * @param array $ids
     *
     * @return null
     */
    public static function delete($ids);
}
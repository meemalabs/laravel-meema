<?php

namespace Meema\LaravelMeema\Models;

use Meema\LaravelMeema\Contracts\MediaInterface;

class Media implements MediaInterface
{
    /**
     * List all media.
     *
     * @return array
     */
    public static function all(): array
    {
        return [];
    }

    /**
     * Get specific media.
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
     * Search for specific media.
     *
     * @param string $query
     *
     * @return array
     */
    public static function search($query): array
    {
        return [];
    }

    /**
     * Get specific media.
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
     * Create media.
     *
     * @param string $name
     *
     * @return array
     */
    public static function create($name): array
    {
        return [];
    }

    /**
     * Update media.
     *
     * @param int $id
     * @param string $name
     *
     * @return array
     */
    public static function update($id, $name): array
    {
        return [];
    }

    /**
     * Delete a media.
     *
     * @param array $ids
     *
     * @return null
     */
    public static function delete($ids)
    {

    }

    /**
     * Upload a media file.
     *
     * @param string $path
     *
     * @return array
     */
    public static function upload($path): array
    {
        return [];
    }

    /**
     * Archive a media.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function archive($ids): array
    {
        return [];
    }

    /**
     * Unarchive a media.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function unarchive($ids): array
    {
        return [];
    }

    /**
     * Make a media private.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function makePrivate($ids): array
    {
        return [];
    }

    /**
     * Make a media public.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function makePublic($ids): array
    {
        return [];
    }

    /**
     * Duplicate a media.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function duplicate($ids): array
    {
        return [];
    }
}

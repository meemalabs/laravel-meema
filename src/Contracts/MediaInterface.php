<?php

namespace Meema\LaravelMeema\Contracts;

interface MediaInterface
{
    /**
     * List all media.
     *
     * @return array
     */
    public static function all(): array;

    /**
     * Get specific media.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function get($ids = null): array;

    /**
     * Search for specific media.
     *
     * @param string $query
     *
     * @return array
     */
    public static function search($query): array;

    /**
     * Get specific media.
     *
     * @param int $id
     *
     * @return array
     */
    public static function find($id): array;

    /**
     * Create media.
     *
     * @param string $name
     *
     * @return array
     */
    public static function create($name): array;

    /**
     * Update media.
     *
     * @param int $id
     * @param string $name
     *
     * @return array
     */
    public static function update($id, $name): array;

    /**
     * Delete a media.
     *
     * @param array $ids
     *
     * @return null
     */
    public static function delete($ids);

    /**
     * Upload a media file.
     *
     * @param string $path
     *
     * @return array
     */
    public static function upload($path): array;

    /**
     * Archive a media.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function archive($ids): array;

    /**
     * Unarchive a media.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function unarchive($ids): array;

    /**
     * Make a media private.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function makePrivate($ids): array;

    /**
     * Make a media public.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function makePublic($ids): array;

    /**
     * Duplicate a media.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function duplicate($ids): array;
}

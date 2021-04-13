<?php

namespace Meema\LaravelMeema\Contracts;

interface FolderInterface
{
    /**
     * List all folders.
     *
     * @return array
     */
    public static function all(): array;

    /**
     * Get specific folders.
     *
     * @param int $id
     *
     * @return array
     */
    public static function get($id = null): array;

    /**
     * Search for specific folders.
     *
     * @param string $query
     *
     * @return array
     */
    public static function search($query): array;

    /**
     * Get specific folders.
     *
     * @param int $id
     *
     * @return Response
     */
    public static function find($id): array;

    /**
     * Create folder.
     *
     * @param  string $name
     *
     * @return array
     */
    public static function create($name): array;

    /**
     * Update folder.
     *
     * @param int $id
     * @param string $name
     *
     * @return array
     */
    public static function update($id, $name): array;

    /**
     * Delete a folder.
     *
     * @param array $ids
     *
     * @return null
     */
    public static function delete($ids);

    /**
     * Archive a folder.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function archive($ids): array;

    /**
     * Unarchive a folder.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function unarchive($ids): array;

    /**
     * Duplicate a folder.
     *
     * @param array $ids
     *
     * @return array
     */
    public static function duplicate($ids): array;
}

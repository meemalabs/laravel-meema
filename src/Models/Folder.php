<?php

namespace Meema\LaravelMeema\Models;

use Meema\LaravelMeema\Contracts\FolderInterface;

class Folder implements FolderInterface
{
    /**
     * List all folders.
     *
     * @return array
     */
    public static function all(): array
    {
        return [];
    }

    /**
     * Get specific folders.
     *
     * @param int $id
     *
     * @return array
     */
    public static function get($id = null): array
    {
        return [];
    }

    /**
     * Search for specific folders.
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
     * Get specific folders.
     *
     * @param int $id
     *
     * @return Response
     */
    public static function find($id): array
    {
        return [];
    }

    /**
     * Create folder.
     *
     * @param  string $name
     *
     * @return array
     */
    public static function create($name): array
    {
        return [];
    }

    /**
     * Update folder.
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
     * Delete a folder.
     *
     * @param array $ids
     *
     * @return null
     */
    public static function delete($ids)
    {
        return;
    }

    /**
     * Archive a folder.
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
     * Unarchive a folder.
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
     * Duplicate a folder.
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

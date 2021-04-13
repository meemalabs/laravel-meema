<?php

namespace Meema\LaravelMeema\Contracts;

interface FolderInterface
{
    /**
     * List all folders.
     *
     * @return array
     */
    public function all(): array;

    /**
     * Get specific folders.
     *
     * @param int $id
     *
     * @return array
     */
    public function get($id = null): array;

    /**
     * Search for specific folders.
     *
     * @param string $query
     *
     * @return array
     */
    public function search($query): array;

    /**
     * Get specific folders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function find($id): array;

    /**
     * Create folder.
     *
     * @param  string $name
     *
     * @return array
     */
    public function create($name): array;

    /**
     * Update folder.
     *
     * @param int $id
     * @param string $name
     *
     * @return array
     */
    public function update($id, $name): array;

    /**
     * Delete a folder.
     *
     * @param array $ids
     *
     * @return null
     */
    public function delete($ids);

    /**
     * Archive a folder.
     *
     * @param array $ids
     *
     * @return array
     */
    public function archive($ids): array;

    /**
     * Unarchive a folder.
     *
     * @param array $ids
     *
     * @return array
     */
    public function unarchive($ids): array;

    /**
     * Duplicate a folder.
     *
     * @param array $ids
     *
     * @return array
     */
    public function duplicate($ids): array;
}

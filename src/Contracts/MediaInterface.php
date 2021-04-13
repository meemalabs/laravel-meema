<?php

namespace Meema\LaravelMeema\Contracts;

interface MediaInterface
{
    /**
     * List all media.
     *
     * @return array
     */
    public function all(): array;

    /**
     * Get specific media.
     *
     * @param array $ids
     *
     * @return array
     */
    public function get($ids = null): array;

    /**
     * Search for specific media.
     *
     * @param string $query
     *
     * @return array
     */
    public function search($query): array;

    /**
     * Get specific media.
     *
     * @param int $id
     *
     * @return array
     */
    public function find($id): array;

    /**
     * Create media.
     *
     * @param string $name
     *
     * @return array
     */
    public function create($name): array;

    /**
     * Update media.
     *
     * @param int $id
     * @param string $name
     *
     * @return array
     */
    public function update($id, $name): array;

    /**
     * Delete a media.
     *
     * @param array $ids
     *
     * @return null
     */
    public function delete($ids);

    /**
     * Upload a media file.
     *
     * @param string $path
     *
     * @return array
     */
    public function upload($path): array;

    /**
     * Archive a media.
     *
     * @param array $ids
     *
     * @return array
     */
    public function archive($ids): array;

    /**
     * Unarchive a media.
     *
     * @param array $ids
     *
     * @return array
     */
    public function unarchive($ids): array;

    /**
     * Make a media private.
     *
     * @param array $ids
     *
     * @return array
     */
    public function makePrivate($ids): array;

    /**
     * Make a media public.
     *
     * @param array $ids
     *
     * @return array
     */
    public function makePublic($ids): array;

    /**
     * Duplicate a media.
     *
     * @param array $ids
     *
     * @return array
     */
    public function duplicate($ids): array;
}

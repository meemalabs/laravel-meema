<?php

use Illuminate\Support\Collection;
use Meema\LaravelMeema\Facades\Folder;
use Meema\LaravelMeema\Facades\Media;
use Meema\LaravelMeema\Facades\Tag;
use Meema\LaravelMeema\Tests\LaravelMeemaTestCase;

uses(LaravelMeemaTestCase::class);

beforeEach(function () {
    $this->initializeDotEnv();
    $this->initializeSettings();
});

it('can fetch all tags', function () {
    $tags = Tag::get();

    $this->assertTrue($tags instanceof Collection);
    $this->assertTrue($tags->count() > 0);
});

it('can fetch specific group of tags', function () {
    $ids = [7, 8, 9];

    $tags = Tag::get($ids);

    $this->assertTrue($tags instanceof Collection);
    $this->assertTrue($tags->count() === count($ids));
});

it('can find a single tag', function () {
    $id = 7;

    $tags = Tag::find($id)->toArray();

    $this->assertTrue(is_array($tags));
    $this->assertTrue(array_key_exists('id', $tags));
});

it('can update a tag', function () {
    $color = 'purple-600';

    $tags = Tag::update(7, $color);

    $this->assertTrue(is_array($tags));
    $this->assertTrue($tags['color'] === $color);
});

it('can fetch all media tags', function () {
    $allMedia = Media::get();

    $media = Media::find($allMedia[0]['id']);
    $tags = $media->tags()->get();

    $this->assertTrue($tags instanceof Collection);
    $this->assertTrue($tags->count() >= 0);
});

it('can fetch all folder tags', function () {
    $folders = Folder::get();

    $folder = Folder::find($folders[0]['id']);

    $tags = $folder->tags()->get();

    $this->assertTrue($tags instanceof Collection);
    $this->assertTrue(count($tags[0]) > 0);
});

it('can delete a tag', function () {
    $tags = Tag::get()->toArray();

    $tags = array_reverse($tags);
    $response = Tag::delete($tags[0]['id']);

    $this->assertTrue(is_null($response));
});

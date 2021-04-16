<?php

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

    $this->assertTrue(is_array($tags));
    $this->assertTrue(count($tags) > 0);
});

it('can fetch specific group of tags', function () {
    $ids = [7, 8, 9];

    $tags = Tag::get($ids);

    $this->assertTrue(is_array($tags));
    $this->assertTrue(count($tags) === count($ids));
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
    $media = Media::find(1);
    $tags = $media->tags()->get();

    $this->assertTrue(is_array($tags));
    $this->assertTrue(count($tags[0]) > 0);
});

it('can fetch all folder tags', function () {
    $folder = Folder::find(1);

    $tags = $folder->tags()->get();

    $this->assertTrue(is_array($tags));
    $this->assertTrue(count($tags[0]) > 0);
});

it('can delete a tag', function () {
    $tags = Tag::get();

    $tags = array_reverse($tags);
    $response = Tag::delete($tags[0]['id']);

    $this->assertTrue(is_null($response));
});

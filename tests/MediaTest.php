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

it('can be fetch all media', function () {
    $media = Media::get();

    $this->assertTrue($media instanceof Collection);
    $this->assertTrue(count($media) > 0);
});

it('can search a media', function () {
    $media = Media::find(1)->toArray();
    $query = $media['name'];

    $media = Media::search($query);

    $this->assertTrue($media instanceof Collection);
    $this->assertTrue(str_contains($media[0]['name'], $query));
});

it('can be fetch all media for a tag', function () {
    // 8 is the tag id for images
    $tag = Tag::find(8);

    $media = $tag->media()->get();

    $this->assertTrue($media instanceof Collection);
    $this->assertTrue(count($media) > 0);
});

it('can be fetch all media for a folder', function () {
    // 8 is the tag id for images
    $folder = Folder::find(1);

    $media = $folder->media()->get();

    $this->assertTrue($media instanceof Collection);
    $this->assertTrue(count($media) > 0);
});

it('can be fetch specific group of media', function () {
    $ids = [1, 2, 3];

    $media = Media::get($ids);

    $this->assertTrue($media instanceof Collection);
    $this->assertTrue(count($media) === count($ids));
});

it('can find a single media', function () {
    $id = 1;

    $media = Media::find(1)->toArray();

    $this->assertTrue(is_array($media));
    $this->assertTrue(array_key_exists('id', $media));
});

it('can update a media', function () {
    $name = 'test media';

    $media = Media::update(1, $name);

    $this->assertTrue(is_array($media));
    $this->assertTrue($media['name'] === $name);
});

it('can archive a media', function () {
    $media = Media::archive(1);

    $this->assertTrue(is_array($media));
    $this->assertTrue((bool) $media['is_archived']);
});

it('can unarchive a media', function () {
    $media = Media::unarchive(1);

    $this->assertTrue(is_array($media));
    $this->assertFalse((bool) $media['is_archived']);
});

it('can make a media private', function () {
    $media = Media::makePrivate(1);

    $this->assertTrue(is_array($media));
    $this->assertFalse((bool) $media['is_public']);
});

it('can make a media public', function () {
    $media = Media::makePublic(1);

    $this->assertTrue(is_array($media));
    $this->assertTrue((bool) $media['is_public']);
});

it('can duplicate a media', function () {
    $media = Media::find(1);

    $duplicated = Media::duplicate(1);

    $this->assertTrue(is_array($duplicated));
    $this->assertTrue($duplicated['name'] === $media->toArray()['name']);
});

it('can delete a media', function () {
    $media = Media::get()->toArray();

    $media = array_reverse($media);
    $response = Media::delete((int) $media[0]['media_id']);

    $this->assertTrue(is_null($response));
});

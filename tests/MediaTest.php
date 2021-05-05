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
    $this->assertTrue($media->count() > 0);
});

it('can search a media', function () {
    $allMedia = Media::get();

    $media = Media::find($allMedia[0]['id'])->toArray();
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
    $this->assertTrue($media->count() > 0);
});

it('can be fetch all media for a folder', function () {
    $folders = Folder::get();

    // 8 is the tag id for images
    $folder = Folder::find($folders[0]['id']);

    $media = $folder->media()->get();

    $this->assertTrue($media instanceof Collection);
    $this->assertTrue($media->count() > 0);
});

it('can be fetch specific group of media', function () {
    $allMedia = Media::get();

    $ids = [$allMedia[0]['id'], $allMedia[1]['id'], $allMedia[2]['id']];

    $media = Media::get($ids);

    $this->assertTrue($media instanceof Collection);
    $this->assertTrue($media->count() === count($ids));
});

it('can find a single media', function () {
    $allMedia = Media::get();

    $id = $allMedia[0]['id'];

    $media = Media::find($id)->toArray();

    $this->assertTrue(is_array($media));
    $this->assertTrue(array_key_exists('id', $media));
});

it('can update a media', function () {
    $allMedia = Media::get();

    $name = 'test media';

    $media = Media::update($allMedia[0]['id'], $name);

    $this->assertTrue(is_array($media));
    $this->assertTrue($media['name'] === $name);
});

it('can archive a media', function () {
    $allMedia = Media::get();

    $media = Media::archive($allMedia[0]['id']);

    $this->assertTrue(is_array($media));
    $this->assertTrue((bool) $media['is_archived']);
});

it('can unarchive a media', function () {
    $allMedia = Media::get();

    $media = Media::unarchive($allMedia[0]['id']);

    $this->assertTrue(is_array($media));
    $this->assertFalse((bool) $media['is_archived']);
});

it('can make a media private', function () {
    $allMedia = Media::get();

    $media = Media::makePrivate($allMedia[0]['id']);

    $this->assertTrue(is_array($media));
    $this->assertFalse((bool) $media['is_public']);
});

it('can make a media public', function () {
    $allMedia = Media::get();

    $media = Media::makePublic($allMedia[0]['id']);

    $this->assertTrue(is_array($media));
    $this->assertTrue((bool) $media['is_public']);
});

it('can duplicate a media', function () {
    $allMedia = Media::get();

    $media = Media::find($allMedia[0]['id']);

    $duplicated = Media::duplicate($allMedia[0]['id']);

    $this->assertTrue(is_array($duplicated));
    $this->assertTrue($duplicated['name'] === $media->toArray()['name']);
});

it('can delete a media', function () {
    $media = Media::get()->toArray();

    $media = array_reverse($media);
    $response = Media::delete($media[0]['id']);

    $this->assertTrue(is_null($response));
});

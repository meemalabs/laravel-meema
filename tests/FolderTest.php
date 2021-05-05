<?php

use Illuminate\Support\Collection;
use Meema\LaravelMeema\Facades\Folder;
use Meema\LaravelMeema\Tests\LaravelMeemaTestCase;

uses(LaravelMeemaTestCase::class);

beforeEach(function () {
    $this->initializeDotEnv();
    $this->initializeSettings();
});

it('can fetch all folders', function () {
    $folders = Folder::get();

    $this->assertTrue($folders instanceof Collection);
    $this->assertTrue($folders->count() > 0);
});

it('can search a folder', function () {
    $folders = Folder::get();

    $folder = Folder::find($folders[0]['id'])->toArray();

    $query = $folder['name'];

    $folders = Folder::search($query);

    $this->assertTrue($folders instanceof Collection);
    $this->assertTrue(str_contains($folders[0]['name'], $query));
});

it('can fetch specific group of folders', function () {
    $folders = Folder::get();

    $ids = [$folders[0]['id'], $folders[1]['id'], $folders[2]['id']];

    $folders = Folder::get($ids);

    $this->assertTrue($folders instanceof Collection);
    $this->assertTrue($folders->count() === count($ids));
});

it('can find a single folder', function () {
    $folders = Folder::get();

    $id = $folders[0]['id'];

    $folders = Folder::find($id)->toArray();

    $this->assertTrue(is_array($folders));
    $this->assertTrue(array_key_exists('id', $folders));
});

it('can create a folder', function () {
    $name = 'test folder';

    $media = Folder::create($name);

    $this->assertTrue(is_array($media));
    $this->assertTrue($media['name'] === $name);
});

it('can update a folder', function () {
    $folders = Folder::get();

    $name = 'test folder';

    $folders = Folder::update($folders[0]['id'], $name);

    $this->assertTrue(is_array($folders));
    $this->assertTrue($folders['name'] === $name);
});

it('can archive a folder', function () {
    $folders = Folder::get();

    $folders = Folder::archive($folders[0]['id']);

    $this->assertTrue(is_array($folders));
    $this->assertTrue((bool) $folders['is_archived']);
});

it('can unarchive a folder', function () {
    $folders = Folder::get();

    $folders = Folder::unarchive($folders[0]['id']);

    $this->assertTrue(is_array($folders));
    $this->assertFalse((bool) $folders['is_archived']);
});

it('can duplicate a folder', function () {
    $folders = Folder::get();

    $folders = Folder::find($folders[0]['id']);

    $duplicated = $folders->duplicate();

    $this->assertTrue(is_array($duplicated));
    $this->assertTrue($duplicated['name'] === $folders->toArray()['name']);
});

it('can delete a folder', function () {
    $folders = Folder::get()->toArray();

    $folders = array_reverse($folders);
    $response = Folder::delete($folders[0]['id']);

    $this->assertTrue(is_null($response));
});

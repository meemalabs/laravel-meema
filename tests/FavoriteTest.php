<?php

use Illuminate\Support\Collection;
use Meema\LaravelMeema\Facades\Favorite;
use Meema\LaravelMeema\Tests\LaravelMeemaTestCase;

uses(LaravelMeemaTestCase::class);

beforeEach(function () {
    $this->initializeDotEnv();
    $this->initializeSettings();
});

it('can fetch all favorites', function () {
    $favorites = Favorite::get();

    $this->assertTrue($favorites instanceof Collection);
    $this->assertTrue($favorites->count() > 0);
});

it('can fetch specific group of favorites', function () {
    $ids = [7, 8, 9];

    $favorites = Favorite::get($ids);

    $this->assertTrue($favorites instanceof Collection);
    $this->assertTrue($favorites->count() === count($ids));
});

it('can find a single favorite', function () {
    $id = 7;

    $favorites = Favorite::find($id)->toArray();

    $this->assertTrue(is_array($favorites));
    $this->assertTrue(array_key_exists('id', $favorites));
});

it('can create a favorite', function () {
    $data = ['name' => 'test favorite', 'icon' => 'house'];

    $favorite = Favorite::create($data);

    $this->assertTrue(is_array($favorite));
    $this->assertTrue($favorite['name'] === $data['name']);
});

it('can update a favorite', function () {
    $data = ['name' => 'test favorite update', 'icon' => 'home'];

    $favorites = Favorite::update(7, $data);

    $this->assertTrue(is_array($favorites));
    $this->assertTrue($favorites['name'] === $data['name']);
});

it('can delete a favorite', function () {
    $favorites = Favorite::get()->toArray();

    $favorites = array_reverse($favorites);
    $response = Favorite::delete($favorites[0]['id']);

    $this->assertTrue(is_null($response));
});

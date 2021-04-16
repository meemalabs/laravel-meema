<?php

use Meema\LaravelMeema\Facades\Meema;
use Meema\LaravelMeema\Tests\LaravelMeemaTestCase;

uses(LaravelMeemaTestCase::class);

beforeEach(function () {
    $this->initializeDotEnv();
    $this->initializeSettings();
});

it('can successfully initialize Meema client', function () {
    $media = Meema::getAccessKey();

    $this->assertTrue(is_string($media));
});

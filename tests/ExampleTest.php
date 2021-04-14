<?php

namespace Meema\LaravelMeema\Tests;

use Meema\LaravelMeema\Facades\Meema;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_can_be_instantiated()
    {
        $accessKey = Meema::getAccessKey();

        dump($accessKey);
    }
}

<?php

namespace Programic\LaravelConvertCaseMiddleware\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }
}

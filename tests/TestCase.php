<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests;

use PHPUnit\Framework\TestCase as PhpUnitTestCase;

abstract class TestCase extends PhpUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        dd(123);
    }
}

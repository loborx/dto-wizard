<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests;

use Loborx\DtoWizard\Traits\BootableTraits;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    use BootableTraits;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fireTraits();
    }
}

<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests;

use Loborx\DtoWizard\Wizard;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Wizard::class)]
class WizardTest extends TestCase
{
    #[Test]
    public function it_can_instantiate(): void
    {
        $this->assertInstanceOf(Wizard::class, new Wizard());
    }
}

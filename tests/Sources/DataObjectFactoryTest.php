<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Sources;

use Loborx\DtoWizard\DataObjectFactory;
use Loborx\DtoWizardTests\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;

#[CoversClass(DataObjectFactory::class)]
class DataObjectFactoryTest extends TestCase
{
    #[Test]
    public function it_is_abstract(): void
    {
        $reflection = new \ReflectionClass(DataObjectFactory::class);

        $this->assertTrue($reflection->isAbstract());
    }
}

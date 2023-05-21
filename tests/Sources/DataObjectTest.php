<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Sources;

use Loborx\DtoWizard\DataObject;
use Loborx\DtoWizardTests\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;

#[CoversClass(DataObject::class)]
class DataObjectTest extends TestCase
{
    #[Test]
    public function it_is_abstract(): void
    {
        $reflection = new \ReflectionClass(DataObject::class);

        $this->assertTrue($reflection->isAbstract());
    }
}

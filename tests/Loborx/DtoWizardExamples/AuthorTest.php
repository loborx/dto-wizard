<?php

declare(strict_types=1);

namespace Loborx\DtoWizardExamples;

use Loborx\DtoWizard\DataObject;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(Author::class)]
class AuthorTest extends TestCase
{
    #[Test]
    public function it_extends_data_object(): void
    {
        $this->assertInstanceOf(DataObject::class, new Author());
    }
}

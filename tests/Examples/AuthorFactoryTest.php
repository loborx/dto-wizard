<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Examples;

use Loborx\DtoWizard\DataObjectFactory;
use Loborx\DtoWizardExamples\Author;
use Loborx\DtoWizardExamples\AuthorFactory;
use Loborx\DtoWizardTests\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;

#[CoversClass(AuthorFactory::class)]
class AuthorFactoryTest extends TestCase
{
    private AuthorFactory $factory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->factory = new AuthorFactory();
    }

    #[Test]
    public function it_creates_a_author(): void
    {
        $this->assertInstanceOf(Author::class, $this->factory->create());
    }

    #[Test]
    public function it_creates_author_first_name(): void
    {
        $this->assertNotNull($this->factory->create()->first_name);
    }

    #[Test]
    public function it_creates_author_last_name(): void
    {
        $this->assertNotNull($this->factory->create()->last_name);
    }

    #[Test]
    public function it_extends_data_object_factory(): void
    {
        $this->assertInstanceOf(DataObjectFactory::class, new AuthorFactory());
    }
}

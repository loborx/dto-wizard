<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Examples;

use Loborx\DtoWizardExamples\DataObjectFactory;
use Loborx\DtoWizardExamples\Post;
use Loborx\DtoWizardExamples\PostFactory;
use Loborx\DtoWizardTests\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;

#[CoversClass(PostFactory::class)]
class PostFactoryTest extends TestCase
{
    protected PostFactory $factory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->factory = new PostFactory();
    }

    #[Test]
    public function it_extends_data_object_factory(): void
    {
        $this->assertInstanceOf(DataObjectFactory::class, new PostFactory());
    }


    #[Test]
    public function it_creates_a_post(): void
    {
        $factory = new PostFactory();

        $this->assertInstanceOf(Post::class, $factory->create());
    }

    #[Test]
    public function it_creates_a_post_title(): void
    {
        $this->assertNotNull($this->factory->create()->title);
    }

    #[Test]
    public function it_creates_a_post_body(): void
    {
        $this->assertNotNull($this->factory->create()->body);
    }
}

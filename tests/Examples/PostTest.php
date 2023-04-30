<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Examples;

use PHPUnit\Framework\TestCase;
use Loborx\DtoWizardExamples\Post;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Post::class)]
class PostTest extends TestCase
{
    #[Test]
    public function it_is_instantiable(): void
    {
        $this->assertInstanceOf(Post::class, new Post());
    }
}

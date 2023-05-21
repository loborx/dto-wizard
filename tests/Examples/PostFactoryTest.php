<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Examples;

use Loborx\DtoWizard\DataObjectFactory;
use Loborx\DtoWizardExamples\Post;
use Loborx\DtoWizardExamples\PostFactory;

beforeEach(fn() => $this->factory = new PostFactory());

it('extends DataObjectFactory', function () {
    $this->assertInstanceOf(DataObjectFactory::class, new PostFactory());
});

it('creates a post', function () {
    $this->assertInstanceOf(Post::class, $this->factory->create());
});

it('creates a post title', function () {
    expect($this->factory->create()->title)->not->toBeNull();
});

it('creates a post body', function () {
    expect($this->factory->create()->body)->not->toBeNull();
});

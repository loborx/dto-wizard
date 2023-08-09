<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Examples;

use DateTime;
use DateTimeImmutable;
use DateTimeInterface;
use Error;
use Loborx\DtoWizard\DataObject;
use Loborx\DtoWizardExamples\Post;

use function Pest\Faker\fake;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertInstanceOf;

it('is instantiable', function () {
    $this->assertInstanceOf(Post::class, new Post());
});

it('extends data object', function () {
    assertInstanceOf(DataObject::class, new Post());
});

it('can be created by factory method', function () {
    assertInstanceOf(Post::class, Post::create());
});

it('can pass parameters in factory method', function () {
    $id = fake()->uuid();
    $post = Post::create(['id' => $id]);

    assertEquals($id, $post->id);
});

it('cannot set readonly property', function () {
    $this->expectException(Error::class);
    $post = Post::create(['id' => fake()->uuid()]);

    $post->id = 'feafeafwea';
});

it('has settable title', function () {
    $post = new Post();
    $title = fake()->sentence();
    $post->title = $title;

    assertEquals($title, $post->title);
});

it('has settable body', function () {
    $post = new Post();
    $body = fake()->sentence();
    $post->body = $body;

    assertEquals($body, $post->body);
});

it('has created at date', function () {
    $post = Post::create(['createdAt' => new DateTimeImmutable()]);
    assertInstanceOf(DateTimeImmutable::class, $post->createdAt);
});

it('has updatedAt date', function () {
    $post = Post::create(['updatedAt' => new DateTimeImmutable()]);
    assertInstanceOf(DateTimeImmutable::class, $post->updatedAt);
});

test('updatedAt is settable', function () {
    $post = new Post();
    $post->updatedAt = new DateTime();

    assertInstanceOf(DateTimeInterface::class, $post->updatedAt);
});

test('createdAt is readonly', function () {
    $this->expectException(Error::class);
    $post = new Post();
    $post->createdAt = new DateTimeImmutable();
});

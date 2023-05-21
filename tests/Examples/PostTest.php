<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Examples;

use Loborx\DtoWizard\DataObject;
use Loborx\DtoWizardExamples\Post;
use function Pest\Faker\fake;

it('is instantiable', function () {
    $this->assertInstanceOf(Post::class, new Post());
});

it('has a title', function () {
    $post = new Post();
    $title = fake()->sentence();
    $post->title = $title;

    $this->assertEquals($title, $post->title);
});

it('has a body', function () {
    $body = fake()->paragraph();
    $post = new Post();
    $post->body = $body;

    $this->assertEquals($body, $post->body);
});

it('has attributes created by constructor', function () {
    $rawData = [
        'title' => fake()->sentence(),
        'body' => fake()->paragraph()
    ];

    $post = new Post($rawData);

    $this->assertEquals($post->title, $rawData['title']);
    $this->assertEquals($post->body, $rawData['body']);
});

it('extends data object', function () {
    $this->assertInstanceOf(DataObject::class, new Post());
});

it('has a settable title', function () {
    $post = new Post(['title' => fake()->sentence]);
    $post->title = $newTitle = fake()->sentence;

    $this->assertEquals($post->title, $newTitle);
});

it('has non settable id', function () {
    $rawData = [
        'id' => $id = fake()->uuid()
    ];

    $post = new Post($rawData);

    $post->set('id', fake()->uuid());

    $this->assertEquals($id, $post->id);
})->todo();

<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Examples;

use Loborx\DtoWizard\DataObject;
use Loborx\DtoWizard\Traits\WithFaker;
use Loborx\DtoWizardExamples\Post;
use Loborx\DtoWizardTests\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;

#[CoversClass(Post::class)]
class PostTest extends TestCase
{
    use WithFaker;

    #[Test]
    public function it_is_instantiable(): void
    {
        $this->assertInstanceOf(Post::class, new Post());
    }

    #[Test]
    public function a_post_has_a_title(): void
    {
        $post = new Post();
        $title = $this->faker->sentence();

        $post->title = $title;

        $this->assertEquals($title, $post->title);
    }

    #[Test]
    public function a_post_has_a_body(): void
    {
        $body = $this->faker->paragraph();

        $post = new Post();
        $post->body = $body;

        $this->assertEquals($body, $post->body);
    }

    #[Test]
    public function a_post_attributes_can_be_created_by_constructor(): void
    {
        $rawData = [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph()
        ];

        $post = new Post($rawData);

        $this->assertEquals($post->title, $rawData['title']);
        $this->assertEquals($post->body, $rawData['body']);
    }

    #[Test]
    public function it_extends_data_object(): void
    {
        $post = new Post();

        $this->assertInstanceOf(DataObject::class, $post);
    }

    #[Test]
    public function a_post_has_settable_title(): void
    {
        $post = new Post(['title' => $this->faker->sentence]);
        $post->title = $newTitle = $this->faker->sentence;

        $this->assertEquals($post->title, $newTitle);
    }

    #[Test]
    public function a_post_has_non_settable_id(): void
    {
        $rawData = [
            'id' => $id = $this->faker->uuid()
        ];
        $post = new Post($rawData);

        $post->set('id', $this->faker->uuid());

        $this->assertEquals($id, $post->id);
    }
}

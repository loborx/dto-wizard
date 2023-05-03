<?php

declare(strict_types=1);

namespace Loborx\DtoWizardExamples;

/**
 * @method Post create()
 */
class PostFactory extends DataObjectFactory
{
    protected string $model = Post::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
        ];
    }

}
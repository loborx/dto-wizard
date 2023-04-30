<?php

declare(strict_types=1);

namespace Loborx\DtoWizardExamples;

use Faker\Factory;
use Faker\Generator;

class PostFactory
{
    protected Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function create(): Post
    {
        $rawData = [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
        ];

        return new Post($rawData);
    }
}
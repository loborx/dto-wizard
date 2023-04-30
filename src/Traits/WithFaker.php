<?php

declare(strict_types=1);

namespace Loborx\DtoWizard\Traits;

use Faker\Factory;
use Faker\Generator;

trait WithFaker
{
    public Generator $faker;

    public function bootWithFaker(): void
    {
        $this->faker = Factory::create('en_US');
    }
}

<?php

declare(strict_types=1);

namespace Loborx\DtoWizard;

use Exception;
use Faker\Factory;
use Faker\Generator;

abstract class DataObjectFactory
{
    protected string $model = '';

    protected Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function create(): DataObject
    {
        $model = $this->getModelFQCN();

        return $model::create($this->definition());
    }

    private function getModelFQCN(): string
    {
        return $this->model;
    }

    /**
     * @return array<string, mixed>
     */
    abstract protected function definition(): array;
}

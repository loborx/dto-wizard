<?php

declare(strict_types=1);

namespace Loborx\DtoWizardExamples;

use Exception;
use Faker\Factory;
use Faker\Generator;
use Loborx\DtoWizard\DataObject;

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
        $class = new $model($this->definition());

        if (!$class instanceof DataObject) {
            throw new Exception('Test');
        }

        return $class;
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
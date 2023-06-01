<?php

declare(strict_types=1);

namespace Loborx\DtoWizard;

abstract class DataObject
{
    /**
     * @var array<string, mixed>
     */
    private array $attributes = [];

    /**
     * @param array<string, mixed> $rawData
     */
    public function __construct(array $rawData = [])
    {
        foreach ($rawData as $key => $value) {
            $this->set($key, $value);
        }
    }

    public function set(string $property, mixed $value): void
    {
        $this->attributes[$property] = $value;
    }

    public function __get(string $property): mixed
    {
        return $this->attributes[$property];
    }
}

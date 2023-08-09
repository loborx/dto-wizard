<?php

declare(strict_types=1);

namespace Loborx\DtoWizard;

use ReflectionClass;

abstract class DataObject
{
    /**
     * @param array<string, mixed> $rawData
     * @return static
     */
    public static function create(array $rawData = []): static
    {
        /** @phpstan-ignore-next-line */
        $model = new static();
        $reflection = new ReflectionClass($model);
        foreach ($rawData as $propertyName => $propertyValue) {
            if ($reflection->hasProperty($propertyName)) {
                $property = $reflection->getProperty($propertyName);
                $property->setValue($model, $propertyValue);
            }
        }
        return $model;
    }
}

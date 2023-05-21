<?php

declare(strict_types=1);

namespace Loborx\DtoWizard;

trait ReadonlyProperties
{
    /**
     * @param array<string, mixed> $rawData
     */
    public function __construct(array $rawData = [])
    {
        foreach ($rawData as $key => $value) {
            $this->set($key, $value);
        }
    }

    public function set(string $property, string $value): void
    {
        $reflection = new \ReflectionClass($this);

        if (!$reflection->hasProperty($property)) {
            return;
        }

        $reflectionProperty = $reflection->getProperty($property);

        if ($reflectionProperty->isInitialized($this) && $reflectionProperty->isReadOnly()) {
            return;
        }

        $this->{$property} = $value;
    }

}
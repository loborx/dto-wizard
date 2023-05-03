<?php

declare(strict_types=1);

namespace Loborx\DtoWizard;

abstract class DataObject
{
    /**
     * @param array<string, mixed> $rawData
     */
    public function __construct(array $rawData = [])
    {
        foreach ($rawData as $key => $value) {
            $this->{$key} = $value;
        }
    }
}

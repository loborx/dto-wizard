<?php

declare(strict_types=1);

namespace Loborx\DtoWizardExamples;

use Loborx\DtoWizard\DataObject;
use ReflectionClass;

/**
 * @property string $id
 * @property string $title
 * @property string $body
 */
class Post extends DataObject
{
    private readonly string $id;
    private string $title;
    private string $body;

    public function __set(string $name, mixed $value): void
    {
        $reflection = new ReflectionClass($this);
        $property = $reflection->getProperty($name);

        if ($property->isInitialized($this) && $property->isReadOnly()) {
            return;;
        }

        $this->{$name} = $value;
    }

    public function __get(string $name): mixed
    {
        return $this->{$name};
    }
}
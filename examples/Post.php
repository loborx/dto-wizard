<?php

declare(strict_types=1);

namespace Loborx\DtoWizardExamples;

class Post
{
    public function __construct(array $rawData = [])
    {
        foreach ($rawData as $key => $value) {
            $this->{$key} = $value;
        }
    }
}
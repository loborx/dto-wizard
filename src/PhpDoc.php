<?php

declare(strict_types=1);

namespace Loborx\DtoWizard;

class PhpDoc implements ExtractorInterface
{
    /**
     * @return string[]
     */
    public function getProperties(object $object): array
    {
        return [
            'id', 'title', 'body'
        ];
    }
}

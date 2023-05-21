<?php

declare(strict_types=1);

namespace Loborx\DtoWizard;

interface ExtractorInterface
{
    /**
     * @return string[]
     */
    public function getProperties(object $object): array;
}

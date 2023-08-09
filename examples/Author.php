<?php

declare(strict_types=1);

namespace Loborx\DtoWizardExamples;

use Loborx\DtoWizard\DataObject;

class Author extends DataObject
{
    public string $firstName;

    public string $lastName;
}
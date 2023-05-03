<?php

declare(strict_types=1);

namespace Loborx\DtoWizardExamples;

use Loborx\DtoWizard\DataObject;

class Author extends DataObject
{
    public string $first_name;
    public string $last_name;

}
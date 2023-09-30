<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Examples;

use Loborx\DtoWizard\DataObject;

class Person extends DataObject
{
    public string $name;
    public int $age;
}
<?php

declare(strict_types=1);

namespace Loborx\DtoWizardExamples;

use Loborx\DtoWizard\DataObject;

/**
 * @property-read int $id
 * @property string $first_name
 * @property string $last_name
 */
class Author extends DataObject
{
    public string $first_name;
    public string $last_name;

}
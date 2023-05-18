<?php

declare(strict_types=1);

namespace Loborx\DtoWizardExamples;

use Loborx\DtoWizard\DataObject;

class Post extends DataObject
{
    use ReadonlyProperties;

    public readonly string $id;
    public string $title;
    public string $body;

}
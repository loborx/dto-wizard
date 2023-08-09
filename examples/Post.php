<?php

declare(strict_types=1);

namespace Loborx\DtoWizardExamples;

use DateTimeImmutable;
use DateTimeInterface;
use Loborx\DtoWizard\DataObject;

class Post extends DataObject
{

    public readonly string $id;
    public mixed $title;
    public string $body;
    public readonly DateTimeImmutable $createdAt;
    public DateTimeInterface $updatedAt;

}
<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Examples;

use Loborx\DtoWizard\DataObject;
use Loborx\DtoWizardExamples\Author;

it('extends DataObject', function () {
    expect(new Author())->toBeInstanceOf(DataObject::class);
});

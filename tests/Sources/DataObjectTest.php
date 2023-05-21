<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Sources;

use Loborx\DtoWizard\DataObject;

it('is abstract', function () {
    $reflection = new \ReflectionClass(DataObject::class);

    expect($reflection->isAbstract())->toBeTrue();
});

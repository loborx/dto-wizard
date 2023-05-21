<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Sources;

use Loborx\DtoWizard\DataObjectFactory;

it('is abstract class', function () {
    $reflection = new \ReflectionClass(DataObjectFactory::class);

    expect($reflection->isAbstract())->toBeTrue();
});

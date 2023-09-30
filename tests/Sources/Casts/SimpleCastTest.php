<?php
declare(strict_types=1);

use Loborx\DtoWizardTests\Examples\Person;
use function PHPUnit\Framework\assertEquals;

it('casts to integer', function () {
    $wrapper = Person::create(['age' => '38']);

    assertEquals(38, $wrapper->age);
    assertEquals('integer', gettype($wrapper->age));
});

test('it can casts from float', function () {
    $wrapper = Person::create(['age' => '38.5']);

    assertEquals(38, $wrapper->age);
    assertEquals('integer', gettype($wrapper->age));
});

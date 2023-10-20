<?php

declare(strict_types=1);

use Loborx\DtoWizardExamples\Person;
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

it('cannot cast a string', function () {
    $this->expectException(TypeError::class);
    Person::create(['age' => 'sto-osiem']);
});

it('cannot cast a object', function () {
    $this->expectException(TypeError::class);
    Person::create(['age' => new Person()]);
});

<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Examples;

use Loborx\DtoWizard\DataObjectFactory;
use Loborx\DtoWizardExamples\Author;
use Loborx\DtoWizardExamples\AuthorFactory;

beforeEach(function () {
    $this->factory = new AuthorFactory();
});

it('creates an author', function () {
    expect($this->factory->create())->toBeInstanceOf(Author::class);
});

it('creates author with first name', function () {
    expect($this->factory->create()->firstName)->not->toBeNull();
});

it('creates an author with last name', function () {
    expect($this->factory->create()->lastName)->not->toBeNull();
});

it('extends DataObjectFactory', function () {
    expect($this->factory)->toBeInstanceOf(DataObjectFactory::class);
});

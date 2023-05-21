<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Sources;

use Loborx\DtoWizard\ExtractorInterface;
use Loborx\DtoWizard\PhpDoc;
use Loborx\DtoWizardExamples\Post;

beforeEach(function () {
    $this->extractor = new PhpDoc();
});

it('implements extractor interface', function () {
    expect($this->extractor)->toBeInstanceOf(ExtractorInterface::class);
});

it('returns an array', function () {
    expect($this->extractor->getProperties(new Post()))->toBeArray();
});

it('returns 3 properties', function () {
    expect($this->extractor->getProperties(new Post()))->toHaveLength(3);
});

it('first element is id', function () {
    expect($this->extractor->getProperties(new Post())[0])->toEqual('id');
});

it('second element is title', function () {
    expect($this->extractor->getProperties(new Post())[1])->toEqual('title');
});

it('third element is body', function () {
    expect($this->extractor->getProperties(new Post())[2])->toEqual('body');
});

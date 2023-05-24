<?php

declare(strict_types=1);

namespace Loborx\DtoWizardTests\Sources;

use Loborx\DtoWizard\ExtractorInterface;
use Loborx\DtoWizard\PhpDocPropertiesExtractor;
use Loborx\DtoWizardExamples\Author;
use Loborx\DtoWizardExamples\Post;

beforeEach(function () {
    $this->extractor = new PhpDocPropertiesExtractor();
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

it('first post element is id', function () {
    expect($this->extractor->getProperties(new Post())[0])->toEqual('id');
});

it('second post element is title', function () {
    expect($this->extractor->getProperties(new Post())[1])->toEqual('title');
});

it('third post element is body', function () {
    expect($this->extractor->getProperties(new Post())[2])->toEqual('body');
});

it('first author element is id', function () {
    expect($this->extractor->getProperties(new Author())[0])->toEqual('id');
});

it('second author element is first_name', function () {
    expect($this->extractor->getProperties(new Author())[1])->toEqual('first_name');
});

it('third author element is last_name', function () {
    expect($this->extractor->getProperties(new Author())[2])->toEqual('last_name');
});

<?php

declare(strict_types=1);

namespace Loborx\DtoWizardExamples;

use Faker\Factory;
use Loborx\DtoWizard\DataObjectFactory;

/**
 * @method Author create()
 */
class AuthorFactory extends DataObjectFactory
{
    protected string $model = Author::class;

    /**
     * @return array<string, mixed>
     */
    protected function definition(): array
    {
        return [
            'first_name' => Factory::create()->firstName(),
            'last_name' => Factory::create()->lastName(),
        ];
    }
}
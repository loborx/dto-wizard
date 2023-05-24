<?php

declare(strict_types=1);

namespace Loborx\DtoWizard;

class PhpDocPropertiesExtractor implements ExtractorInterface
{
    /**
     * @return string[]
     */
    public function getProperties(object $object): array
    {
        $properties = [];

        $reflection = new \ReflectionClass($object);
        $phpDoc = $reflection->getDocComment();

        if (!$phpDoc) {
            return $properties;
        }

        $entries = explode("\n", $phpDoc);
        $candidates = array_filter($entries, function (string $entry) {
            return str_contains($entry, '@property') && str_contains($entry, '$');
        });

        foreach ($candidates as $candidate) {
            preg_match('/\$.+/', $candidate, $property);
            $propertyName = str_replace('$', '', $property[0]);
            $properties[] = $propertyName;
        }

        return $properties;
    }
}

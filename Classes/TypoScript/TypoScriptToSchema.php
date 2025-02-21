<?php

declare(strict_types=1);

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Schema\TypoScript;

use Brotkrueml\Schema\Core\Model\TypeInterface;
use Brotkrueml\Schema\Manager\SchemaManager;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * Convert any given TypoScript to proper schema types.
 * The result will be added as single (nested) type to the SchemaManager.
 * @internal
 */
final class TypoScriptToSchema
{
    private TypeBuilder $typeBuilder;
    private PropertiesAdder $propertiesAdder;
    private SchemaManager $schemaManager;

    public function __construct(
        TypeBuilder $typeBuilder,
        PropertiesAdder $propertiesAdder,
        SchemaManager $schemaManager
    ) {
        $this->typeBuilder = $typeBuilder;
        $this->propertiesAdder = $propertiesAdder;
        $this->schemaManager = $schemaManager;
    }

    /**
     * @param mixed[] $configuration
     */
    public function convert(
        ContentObjectRenderer $cObj,
        array $configuration
    ): void {
        $type = $this->typeBuilder->build($cObj, $configuration);

        if ($type instanceof TypeInterface) {
            $this->propertiesAdder->add($cObj, $type, $configuration['properties.'] ?? []);
            $this->schemaManager->addType($type);
        }
    }
}

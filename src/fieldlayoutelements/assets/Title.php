<?php

namespace craft\feedme\fieldlayoutelements\assets;

use craft\feedme\base\Field;
use craft\feedme\base\FieldInterface;
use craft\fieldlayoutelements\assets\AssetTitleField;

/**
 * @property-read string $mappingTemplate
 */
class Title extends Field implements FieldInterface
{
    // Properties
    // =========================================================================

    /**
     * @var string
     */
    public static string $name = 'Title';

    /**
     * @var string
     */
    public static string $class = AssetTitleField::class;

    // Templates
    // =========================================================================

    /**
     * @inheritDoc
     */
    public function getMappingTemplate(): string
    {
        return 'feed-me/_includes/fieldlayoutelements/assets/title';
    }

    // Public Methods
    // =========================================================================

    /**
     * @inheritDoc
     */
    public function parseField(): mixed
    {
        $value = $this->fetchValue();

        if ($value === null) {
            return null;
        }

        return $value;
    }
}

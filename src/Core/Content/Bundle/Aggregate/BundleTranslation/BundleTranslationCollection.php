<?php declare(strict_types=1);

namespace BundleExampleStep2\Core\Content\Bundle\Aggregate\BundleTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

class BundleTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return BundleTranslationEntity::class;
    }
}
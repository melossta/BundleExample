<?php declare(strict_types=1);

namespace BundleExampleStep2\Core\Content\Product; // Adjust your namespace as needed

use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Inherited;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Content\Product\ProductDefinition;
use BundleExampleStep2\Core\Content\Bundle\Aggregate\BundleProduct\BundleProductDefinition;
use BundleExampleStep2\Core\Content\Bundle\BundleDefinition;

// Make sure this is imported

class ProductExtension extends EntityExtension
{
    public function getDefinitionClass(): string
    {
        return ProductDefinition::class;
    }

    public function getEntityName(): string
    {
        return ProductDefinition::ENTITY_NAME;
    }

    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            (new ManyToManyAssociationField(
                'bundles',
                BundleDefinition::class,
                BundleProductDefinition::class,
                'product_id',
                'bundle_id'
            ))->addFlags(new Inherited())
        );
    }
}

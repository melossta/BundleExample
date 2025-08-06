<?php declare(strict_types=1);

namespace BundleExampleStep2\Core\Content\Bundle\Aggregate\BundleTranslation;



//use BundleEntity;
use BundleExampleStep2\Core\Content\Bundle\BundleEntity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use BundleExampleStep2\Core\Content\Bundle\Aggregate\BundleTranslation\BundleTranslationEntity;
use BundleExampleStep2\Core\Content\Bundle\Aggregate\BundleTranslation\BundleTranslationCollection;
use BundleExampleStep2\Core\Content\Bundle\BundleDefinition;

class BundleTranslationDefinition extends EntityTranslationDefinition
{

    public function getEntityName(): string
    {
        return 'swag_bundle_translation';
    }
    public function getCollectionClass(): string
    {
        return BundleTranslationCollection::class;
    }
    public function getEntityClass(): string
    {
        return BundleTranslationEntity::class;
    }
//    public function getParentEntityClass(): string
//    {
//        return BundleDefinition::class;
//    }
    public function getParentEntityClass(): string
    {
        return BundleEntity::class; // ✅ Not BundleDefinition::class
    }

    public function getParentDefinitionClass(): string
    {
        return BundleDefinition::class;
    }


    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new StringField('name', 'name'))->addFlags(new Required()),

        ]);
    }
}
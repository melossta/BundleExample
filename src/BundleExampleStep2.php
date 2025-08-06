<?php declare(strict_types=1);

namespace BundleExampleStep2;

use Doctrine\DBAL\Connection;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;
use Shopware\Core\Framework\Plugin\Context\DeactivateContext;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;
use Shopware\Core\Framework\Plugin\Context\UpdateContext;
use Shopware\Core\Framework\DataAbstractionLayer\Indexing\EntityIndexerRegistry;



class BundleExampleStep2 extends Plugin
{
    public function install(InstallContext $installContext): void
    {
        // Do stuff such as creating a new payment method
    }

    public function uninstall(UninstallContext $uninstallContext): void
    {
        parent::uninstall($uninstallContext);

        if ($uninstallContext->keepUserData()) {
            return;
        }
        $connection = $this->container->get(Connection::class);

        $connection->executeQuery('DROP TABLE IF EXISTS `swag_bundle_product`');
        $connection->executeQuery('DROP TABLE IF EXISTS `swag_bundle_translation`');
        $connection->executeQuery('DROP TABLE IF EXISTS `swag_bundle`');
        $connection->executeQuery('ALTER TABLE `product` DROP COLUMN `bundles`');


    }


    public function activate(ActivateContext $activateContext): void
    {
//        parent::activate($activateContext);
//
//        /** @var EntityIndexerRegistry $indexerRegistry */
//        $indexerRegistry = $this->container->get(EntityIndexerRegistry::class);
//
//        // This will re-run all default indexers (inheritance, SEO, search, etc.)
//        $indexerRegistry->index(false);
    }


//    public function activate(ActivateContext $activateContext): void
//    {
//        /** @var EntityIndexerRegistry $indexerRegistry */
//        $indexerRegistry = $this->container->get(EntityIndexerRegistry::class);
//
//        // Just trigger reindex synchronously without queue
//        $indexerRegistry->index(true); // true to skip queue and index immediately
//
//    }

    public function deactivate(DeactivateContext $deactivateContext): void
    {
        // Deactivate entities, such as a new payment method
        // Or remove previously created entities
    }

    public function update(UpdateContext $updateContext): void
    {
        // Update necessary stuff, mostly non-database related
    }

    public function postInstall(InstallContext $installContext): void
    {
    }

    public function postUpdate(UpdateContext $updateContext): void
    {
    }
}

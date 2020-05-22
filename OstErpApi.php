<?php declare(strict_types=1);

/**
 * Einrichtungshaus Ostermann GmbH & Co. KG - ERP API
 *
 * The API to the Ostermann ERP - currently IWM. The API comes with two adapters for
 * test and live mode. The test mode returns random mock objects while the live mode
 * is the IWM adapter.
 *
 * 1.0.0
 * - initial release
 *
 * 1.0.1
 * - fixed hydrating consultants with an umlaut in their name
 *
 * 1.0.2
 * - added zip api resource
 *
 * 1.1.0
 * - added type casting to iwm gateways
 *
 * 1.1.1
 * - added email to customer struct
 *
 * 1.1.2
 * - added frontend controller test for customer search
 *
 * 1.1.3
 * - added former unknown label
 * - added check for invalid label
 *
 * 1.1.4
 * - added cast to string
 *
 * 1.1.5
 * - added utf-8 encoder for customer api
 *
 * 1.1.6
 * - fixed array trait
 * - added missing locations
 * - fixed location resource for different companies
 *
 * 1.1.7
 * - fixed versioning
 *
 * 1.1.8
 * - added distinct searchBy method
 *
 * 1.1.9
 * - fixed whitespace
 *
 * @package   OstErpApi
 *
 * @author    Eike Brandt-Warneke <e.brandt-warneke@ostermann.de>
 * @copyright 2018 Einrichtungshaus Ostermann GmbH & Co. KG
 * @license   proprietary
 */

namespace OstErpApi;

use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OstErpApi extends Plugin
{
    /**
     * ...
     *
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        // set plugin parameters
        $container->setParameter('ost_erp_api.plugin_dir', $this->getPath() . '/');
        $container->setParameter('ost_erp_api.view_dir', $this->getPath() . '/Resources/views/');

        // call parent builder
        parent::build($container);
    }

    /**
     * Activate the plugin.
     *
     * @param Context\ActivateContext $context
     */
    public function activate(Context\ActivateContext $context)
    {
        // clear complete cache after we activated the plugin
        $context->scheduleClearCache($context::CACHE_LIST_ALL);
    }

    /**
     * Install the plugin.
     *
     * @param Context\InstallContext $context
     *
     * @throws \Exception
     */
    public function install(Context\InstallContext $context)
    {
        // install the plugin
        $installer = new Setup\Install(
            $this,
            $context,
            $this->container->get('models'),
            $this->container->get('shopware_attribute.crud_service')
        );
        $installer->install();

        // update it to current version
        $updater = new Setup\Update(
            $this,
            $context
        );
        $updater->install();

        // call default installer
        parent::install($context);
    }

    /**
     * Update the plugin.
     *
     * @param Context\UpdateContext $context
     */
    public function update(Context\UpdateContext $context)
    {
        // update the plugin
        $updater = new Setup\Update(
            $this,
            $context
        );
        $updater->update($context->getCurrentVersion());

        // call default updater
        parent::update($context);
    }

    /**
     * Uninstall the plugin.
     *
     * @param Context\UninstallContext $context
     *
     * @throws \Exception
     */
    public function uninstall(Context\UninstallContext $context)
    {
        // uninstall the plugin
        $uninstaller = new Setup\Uninstall(
            $this,
            $context,
            $this->container->get('models'),
            $this->container->get('shopware_attribute.crud_service')
        );
        $uninstaller->uninstall();

        // clear complete cache
        $context->scheduleClearCache($context::CACHE_LIST_ALL);

        // call default uninstaller
        parent::uninstall($context);
    }
}

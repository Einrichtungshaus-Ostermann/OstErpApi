<?php declare(strict_types=1);
/**
 * Einrichtungshaus Ostermann GmbH & Co. KG - ERP API
 *
 * @package   OstErpApi
 *
 * @author    Eike Brandt-Warneke <e.brandt-warneke@ostermann.de>
 * @copyright 2018 Einrichtungshaus Ostermann GmbH & Co. KG
 * @license   proprietary
 */

namespace OstErpApi\Api\Resources;

use OstErpApi\Api\Gateway\Gateway;
use OstErpApi\Api\Hydrator\Hydrator;

class Store extends Resource
{


    protected $name = "Store";


    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = Shopware()->Container()->get( "ost_erp_api.configuration_service" )->get( "adapter" );

        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.store');

        $dataArr = $gateway->findBy($params);

        foreach ($dataArr as &$storeEntry) {
            if (!$this->isOptionTrue($options, 'noLocations')) {
                $storeEntry['STORE_LOCATIONS'] = Shopware()->Container()->get('ost_erp_api.api.resources.location')->findBy([
                        '[store.company = ]' . $storeEntry['COMPANY'],
                        '[store.key] = ' . $storeEntry['STORE_KEY']
                    ]) ?? [];
            }
        }
        unset($storeEntry);

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.store');

        return $hydrator->hydrate($dataArr);
    }
}

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

class Location extends Resource
{
    protected $name = 'Location';



    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = Shopware()->Container()->get( "ost_erp_api.configuration_service" )->get( "adapter" );






        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.location');

        $dataArr = $gateway->findBy($params);

        foreach ($dataArr as &$locationEntry) {
            $locationEntry['LOCATION_STORE'] = Shopware()->Container()->get('ost_erp_api.api.resources.store')->findBy([
                    '[store.company = ]' . $locationEntry['COMPANY'],
                    '[store.key] = ' . $locationEntry['STORE_KEY']
                ], [
                    'noLocations' => true
                ])[0] ?? null;
        }
        unset($locationEntry);

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.location');

        return $hydrator->hydrate($dataArr);
    }
}

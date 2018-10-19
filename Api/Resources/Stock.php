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

class Stock extends Resource
{
    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = 'Mock';

        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.stock');

        $dataArr = $gateway->findBy($params);

        foreach ($dataArr as &$stockEntry) {
            $stockEntry['STOCK_LOCATION'] = Shopware()->Container()->get('ost_erp_api.api.resources.location')->findBy([
                '[store.company = ]' . $stockEntry['COMPANY'],
                '[store.key] = ' . $stockEntry['STOCK_LOCATION']
                ])[0] ?? null;
        }
        unset($stockEntry);

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.stock');

        return $hydrator->hydrate($dataArr);
    }
}

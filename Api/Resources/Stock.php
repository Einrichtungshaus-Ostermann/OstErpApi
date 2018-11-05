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
    protected $name = 'Stock';

    // [stock.number] = 121535
    // [stock.location] = 150
    // {stock.company] = 1
    // [stock.type] = L
    // [stock.quantity] > 0

    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = Shopware()->Container()->get('ost_erp_api.configuration')['adapter'];

        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.stock');
        $stockArr = $gateway->findBy($params);

        foreach ($stockArr as $key => $stock) {

            /* @var $companyResource Company */
            $companyResource = Shopware()->Container()->get('ost_erp_api.api.resources.company');

            $company = $companyResource->findOneBy([
                "[company.key] = '" . $stock['STOCK_COMPANY'] . "'"
            ]);

            $stock['STOCK_COMPANY'] = $company;

            /* @var $locationResource Location */
            $locationResource = Shopware()->Container()->get('ost_erp_api.api.resources.location');

            $location = $locationResource->findOneBy([
                "[location.key] = '" . $stock['STOCK_LOCATION'] . "'"
            ]);

            $stock['STOCK_LOCATION'] = $location;

            $stockArr[$key] = $stock;
        }

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.stock');

        return $hydrator->hydrate($stockArr);
    }
}

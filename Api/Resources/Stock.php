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

use OstErpApi\Api\Hydrator\Hydrator;

class Stock extends Resource
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'Stock';

    /**
     * {@inheritdoc}
     */
    public function findBy(array $params = []): array
    {
        // get the gateway
        $gateway = $this->getGateway( "stock" );

        // get the stock
        $stockArr = $gateway->findBy($params);

        // loop them
        foreach ($stockArr as $key => $stock) {

            /* @var $companyResource Company */
            $companyResource = $this->getResource("company");

            /** @var \OstErpApi\Struct\Company $company */
            $company = $companyResource->findOneBy([
                "[company.key] = '" . $stock['STOCK_COMPANY'] . "'"
            ]);

            if ($company === null) {
                continue;
            }

            // add it
            $stock['STOCK_COMPANY'] = $company;

            /* @var $locationResource Location */
            $locationResource = $this->getResource("location");

            // get it
            $location = $locationResource->findOneBy([
                "[location.key] = '" . $stock['STOCK_LOCATION'] . "'",
                "[location.company] = '" . $company->getKey() . "'"
            ]);

            // add it
            $stock['STOCK_LOCATION'] = $location;

            // set it back
            $stockArr[$key] = $stock;
        }

        /** @var Hydrator $hydrator */
        $hydrator = $this->getHydrator("stock");

        // return hydrated entities
        return $hydrator->hydrate($stockArr);
    }
}

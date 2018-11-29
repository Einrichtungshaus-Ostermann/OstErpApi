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

class ReservedStock extends Resource
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'ReservedStock';

    /**
     * {@inheritdoc}
     */
    public function findBy(array $params = []): array
    {
        // get the gateway
        $gateway = $this->getGateway( "reserved_stock" );

        // get the reserved stock
        $reservedStockArr = $gateway->findBy($params);

        // loop them
        foreach ($reservedStockArr as $key => $reservedStock) {

            /* @var $companyResource Company */
            $companyResource = $this->getResource("company");

            // get the company
            $company = $companyResource->findOneBy([
                "[company.key] = '" . $reservedStock['RESERVEDSTOCK_COMPANY'] . "'"
            ]);

            // add it
            $reservedStock['RESERVEDSTOCK_COMPANY'] = $company;

            /* @var $locationResource Location */
            $locationResource = $this->getResource("location");

            // get the location
            $location = $locationResource->findOneBy([
                "[location.key] = '" . $reservedStock['RESERVEDSTOCK_LOCATION'] . "'"
            ]);

            // add it
            $reservedStock['RESERVEDSTOCK_LOCATION'] = $location;

            // set it back
            $reservedStockArr[$key] = $reservedStock;
        }

        /** @var Hydrator $hydrator */
        $hydrator = $this->getHydrator("reserved_stock");

        // return hydrated entities
        return $hydrator->hydrate($reservedStockArr);
    }
}

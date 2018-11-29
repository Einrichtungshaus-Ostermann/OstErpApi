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
    /**
     * {@inheritdoc}
     */
    protected $name = 'Store';

    /**
     * {@inheritdoc}
     */
    public function findBy(array $params = []): array
    {
        // get the stock
        $gateway = $this->getGateway( "store" );

        // get the stores
        $storesArr = $gateway->findBy($params);

        // loop them
        foreach ($storesArr as $key => $store) {

            /* @var $companyResource Company */
            $companyResource = $this->getResource("company");

            // get it
            $company = $companyResource->findOneBy([
                "[company.key] = '" . $store['STORE_COMPANY'] . "'"
            ]);

            // set it
            $store['STORE_COMPANY'] = $company;

            // set it back
            $storesArr[$key] = $store;
        }

        /** @var Hydrator $hydrator */
        $hydrator = $this->getHydrator("store");

        // return hydrated entities
        return $hydrator->hydrate($storesArr);
    }
}

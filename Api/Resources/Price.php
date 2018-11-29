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

class Price extends Resource
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'Price';

    /**
     * {@inheritdoc}
     */
    public function findBy(array $params = []): array
    {
        // get the gateway
        $gateway = $this->getGateway( "price" );

        // get the prices
        $priceArr = $gateway->findBy($params);

        // loop themn
        foreach ($priceArr as $key => $price) {

            /* @var $companyResource Company */
            $companyResource = $this->getResource("company");

            // get the company
            $company = $companyResource->findOneBy([
                "[company.key] = '" . $price['PRICE_COMPANY'] . "'"
            ]);

            // add it
            $price['PRICE_COMPANY'] = $company;

            /* @var $locationResource Location */
            $storeResource = $this->getResource("store");

            // get the store
            $store = $storeResource->findOneBy([
                "[store.key] = '" . $price['PRICE_STORE'] . "'"
            ]);

            // add it
            $price['PRICE_STORE'] = $store;

            // set it back
            $priceArr[$key] = $price;
        }

        /** @var Hydrator $hydrator */
        $hydrator = $this->getHydrator("price");

        // return hydrated entities
        return $hydrator->hydrate($priceArr);
    }
}

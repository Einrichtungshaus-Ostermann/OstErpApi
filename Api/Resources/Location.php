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
    /**
     * {@inheritdoc}
     */
    protected $name = 'Location';

    /**
     * {@inheritdoc}
     */
    public function findBy(array $params = []): array
    {
        /** @var Gateway $gateway */
        $gateway = $this->getGateway( "location" );

        // get the locations
        $locationArr = $gateway->findBy($params);

        // loop them
        foreach ($locationArr as $key => $location) {

            /* @var $storeResource Store */
            $storeResource = $this->getResource( "store" );

            // get the store for this location
            $store = $storeResource->findOneBy([
                "[store.key] = '" . $location['LOCATION_STORE'] . "'"
            ]);

            // add it
            $location['LOCATION_STORE'] = $store;

            /* @var $companyResource Company */
            $companyResource = $this->getResource( "company" );

            // get the company
            $company = $companyResource->findOneBy([
                "[company.key] = '" . $location['LOCATION_COMPANY'] . "'"
            ]);

            // add it
            $location['LOCATION_COMPANY'] = $company;

            // set location again
            $locationArr[$key] = $location;
        }

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.location');

        // return hydrated entities
        return $hydrator->hydrate($locationArr);
    }
}

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

        $locationArr = $gateway->findBy($params);


        foreach ( $locationArr as $key => $location )
        {

            /* @var $storeResource Store */
            $storeResource = Shopware()->Container()->get('ost_erp_api.api.resources.store');

            $store = $storeResource->findOneBy( array(
                "[store.key] = '" . $location['LOCATION_STORE'] ."'"
            ));


            $location['LOCATION_STORE'] = $store;





            /* @var $companyResource Company */
            $companyResource = Shopware()->Container()->get('ost_erp_api.api.resources.company');

            $company = $companyResource->findOneBy( array(
                "[company.key] = '" . $location['LOCATION_COMPANY'] ."'"
            ));


            $location['LOCATION_COMPANY'] = $company;









            $locationArr[$key] = $location;

        }







        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.location');

        return $hydrator->hydrate($locationArr);


    }
}

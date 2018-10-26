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

    protected $name = "Price";





    // [price.number] = 121535

    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = Shopware()->Container()->get( "ost_erp_api.configuration_service" )->get( "adapter" );



        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.price');

        $priceArr = $gateway->findBy($params);


        foreach ( $priceArr as $key => $price )
        {

            /* @var $companyResource Company */
            $companyResource = Shopware()->Container()->get('ost_erp_api.api.resources.company');

            $company = $companyResource->findOneBy( array(
                "[company.key] = '" . $price['PRICE_COMPANY'] ."'"
            ));


            $price['PRICE_COMPANY'] = $company;





            /* @var $locationResource Location */
            $storeResource = Shopware()->Container()->get('ost_erp_api.api.resources.store');

            $store = $storeResource->findOneBy( array(
                "[store.key] = '" . $price['PRICE_STORE'] ."'"
            ));


            $price['PRICE_STORE'] = $store;










            $priceArr[$key] = $price;

        }







        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.price');

        return $hydrator->hydrate($priceArr);
    }
}

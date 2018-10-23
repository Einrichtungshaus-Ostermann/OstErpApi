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
    protected $name = 'ReservedStock';




    // [reservedstock.number] = 121535
    // [reservedstock.location] = 150
    // {reservedstock.company] = 1
    // [reservedstock.quantity] > 0

    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = Shopware()->Container()->get( "ost_erp_api.configuration_service" )->get( "adapter" );



        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.reserved_stock');

        $reservedStockArr = $gateway->findBy($params);


        foreach ( $reservedStockArr as $key => $reservedStock )
        {

            /* @var $companyResource Company */
            $companyResource = Shopware()->Container()->get('ost_erp_api.api.resources.company');

            $company = $companyResource->findOneBy( array(
                "[company.key] = '" . $reservedStock['RESERVEDSTOCK_COMPANY'] ."'"
            ));


            $reservedStock['RESERVEDSTOCK_COMPANY'] = $company;





            /* @var $locationResource Location */
            $locationResource = Shopware()->Container()->get('ost_erp_api.api.resources.location');

            $location = $locationResource->findOneBy( array(
                "[location.key] = '" . $reservedStock['RESERVEDSTOCK_LOCATION'] ."'"
            ));


            $reservedStock['RESERVEDSTOCK_LOCATION'] = $location;










            $reservedStockArr[$key] = $reservedStock;

        }







        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.reserved_stock');

        return $hydrator->hydrate($reservedStockArr);
    }
}

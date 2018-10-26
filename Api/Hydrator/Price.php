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

namespace OstErpApi\Api\Hydrator;

use OstErpApi\Struct;

class Price extends Hydrator
{
    public function hydrate(array $data): array
    {
        $arr = [];

        foreach ($data as $price) {
            $priceStruct = new Struct\Price();









            $priceStruct->setNumber((string) $price['ARTICLE_NUMBER']);

            $priceStruct->setStartDate(new \DateTime((string) $price['PRICE_STARTDATE']));
            $priceStruct->setEndDate(new \DateTime((string) $price['PRICE_ENDDATE']));


            $priceStruct->setPickupPrice((float) $price['PRICE_PICKUPPRICE']);
            $priceStruct->setDeliveryPrice((float) $price['PRICE_DELIVERYPRICE']);
            $priceStruct->setFullservicePrice((float) $price['PRICE_FULLSERVICEPRICE']);

            $priceStruct->setPickupPseudoPrice((float) $price['PRICE_PICKUPPSEUDOPRICE']);
            $priceStruct->setDeliveryPseudoPrice((float) $price['PRICE_DELIVERYPSEUDOPRICE']);
            $priceStruct->setFullservicePseudoPrice((float) $price['PRICE_FULLSERVICEPSEUDOPRICE']);



            if ($price['PRICE_STORE'] !== null) {
                $priceStruct->setStore($price['PRICE_STORE']);
            }


            if ($price['PRICE_COMPANY'] !== null) {
                $priceStruct->setCompany($price['PRICE_COMPANY']);
            }




            $arr[] = $priceStruct;
        }

        return $arr;
    }
}

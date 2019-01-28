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
    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data): array
    {
        // hydrated array
        $arr = [];

        // loop every price
        foreach ($data as $price) {

            // create struct
            $priceStruct = new Struct\Price();

            // flat attributes
            $priceStruct->setNumber((string) $price['ARTICLE_NUMBER']);
            $priceStruct->setStartDate($price['PRICE_STARTDATE']);
            $priceStruct->setEndDate($price['PRICE_ENDDATE']);
            $priceStruct->setPickupPrice((float) $price['PRICE_PICKUPPRICE']);
            $priceStruct->setDeliveryPrice((float) $price['PRICE_DELIVERYPRICE']);
            $priceStruct->setFullservicePrice((float) $price['PRICE_FULLSERVICEPRICE']);
            $priceStruct->setPickupPseudoPrice((float) $price['PRICE_PICKUPPSEUDOPRICE']);
            $priceStruct->setDeliveryPseudoPrice((float) $price['PRICE_DELIVERYPSEUDOPRICE']);
            $priceStruct->setFullservicePseudoPrice((float) $price['PRICE_FULLSERVICEPSEUDOPRICE']);

            // do we have a store?
            if ($price['PRICE_STORE'] !== null) {
                $priceStruct->setStore($price['PRICE_STORE']);
            }

            // do we have a company?
            if ($price['PRICE_COMPANY'] !== null) {
                $priceStruct->setCompany($price['PRICE_COMPANY']);
            }

            // add hydrated struct
            $arr[] = $priceStruct;
        }

        // return them
        return $arr;
    }
}

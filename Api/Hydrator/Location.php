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

class Location extends Hydrator
{
    public function hydrate(array $data): array
    {
        $arr = [];

        foreach ($data as $location) {
            $locationStruct = new Struct\Store();

            $locationStruct->setCompany((int) $location['ARTICLE_COMPANY']);
            $locationStruct->setKey($location['LOCATION_KEY']);
            $locationStruct->setName($location['LOCATION_NAME']);

//            foreach ($location['LOCATION_NUMBERS'] as $number) {
//                $numberStruct = new Struct\Location\Number();
//
//                $numberStruct->setKey($number['NUMBER_KEY']);
//
//                $locationStruct->addNumber($numberStruct);
//            }


            $arr[] = $locationStruct;
        }

        return $arr;
    }
}

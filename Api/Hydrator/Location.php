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
            $locationStruct = new Struct\Location();



            $locationStruct->setKey((string) $location['LOCATION_KEY']);
            $locationStruct->setType((string) $location['LOCATION_TYPE']);

            $locationStruct->setCompany($location['LOCATION_COMPANY']);


            $locationStruct->setStore($location['LOCATION_STORE']);


            $arr[] = $locationStruct;
        }

        return $arr;
    }
}

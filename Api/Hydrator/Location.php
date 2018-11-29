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
    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data): array
    {
        // hydrated array
        $arr = [];

        // loop every location
        foreach ($data as $location) {

            // create struct
            $locationStruct = new Struct\Location();

            // flat attributes
            $locationStruct->setKey((string) $location['LOCATION_KEY']);
            $locationStruct->setType((string) $location['LOCATION_TYPE']);

            // structs
            $locationStruct->setCompany($location['LOCATION_COMPANY']);
            $locationStruct->setStore($location['LOCATION_STORE']);

            // add hydrated struct
            $arr[] = $locationStruct;
        }

        // return them
        return $arr;
    }
}

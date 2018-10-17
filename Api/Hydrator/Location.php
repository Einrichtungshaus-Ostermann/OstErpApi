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
        $arr = array();

        foreach ($data as $location) {
            $locationStruct = new Struct\Location();

            $locationStruct->setKey($location['location_key']);
            $locationStruct->setName($location['location_name']);


            foreach ($location['location_numbers'] as $number) {
                $numberStruct = new Struct\Location\Number();

                $numberStruct->setKey($number['number_key']);

                $locationStruct->addNumber($numberStruct);
            }


            $arr[] = $locationStruct;
        }
        return $arr;
    }
}

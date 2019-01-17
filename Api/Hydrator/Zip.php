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

class Zip extends Hydrator
{
    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data): array
    {
        // hydrated array
        $arr = [];

        // loop every zip
        foreach ($data as $zip) {

            // create struct
            $zipStruct = new Struct\Zip();

            // flat attributes
            $zipStruct->setRangeFrom((string) $zip['ZIP_RANGEFROM']);
            $zipStruct->setRangeTo((string) $zip['ZIP_RANGETO']);
            $zipStruct->setCity((string) $zip['ZIP_CITY']);

            // add hydrated struct
            $arr[] = $zipStruct;
        }

        // return them
        return $arr;
    }
}

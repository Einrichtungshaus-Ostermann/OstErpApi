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

class Consultant extends Hydrator
{
    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data): array
    {
        // hydrated array
        $arr = [];

        // loop every consultant
        foreach ($data as $consultant) {

            // create struct
            $consultantStruct = new Struct\Consultant();

            // flat attributes
            $consultantStruct->setNumber((string) $consultant['CONSULTANT_NUMBER']);
            $consultantStruct->setName((string) $consultant['CONSULTANT_NAME']);

            // add hydrated struct
            $arr[] = $consultantStruct;
        }

        // return them
        return $arr;
    }
}

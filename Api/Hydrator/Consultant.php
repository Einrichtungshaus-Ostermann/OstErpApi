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
    public function hydrate(array $data): array
    {
        $arr = [];

        foreach ($data as $location) {
            $consultantStruct = new Struct\Consultant();



            $consultantStruct->setNumber((string) $location['CONSULTANT_NUMBER']);

            $consultantStruct->setName($location['CONSULTANT_NAME']);




            $arr[] = $consultantStruct;
        }

        return $arr;
    }
}

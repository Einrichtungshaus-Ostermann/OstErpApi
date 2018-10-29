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

class Label extends Hydrator
{
    public function hydrate(array $data): array
    {
        $arr = [];

        foreach ($data as $label) {
            $labelStruct = new Struct\Label();

            $labelStruct->setKey((int)$label['LABEL_KEY']);
            $labelStruct->setName((string)$label['LABEL_NAME']);
            $labelStruct->setType((int)$label['LABEL_TYPE']);


            $arr[] = $labelStruct;
        }

        return $arr;
    }
}

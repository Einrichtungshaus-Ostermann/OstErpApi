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
    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data): array
    {
        // hydrated array
        $arr = [];

        // loop every label
        foreach ($data as $label) {

            // create struct
            $labelStruct = new Struct\Label();

            // flat attributes
            $labelStruct->setKey((int) $label['LABEL_KEY']);
            $labelStruct->setName((string) $label['LABEL_NAME']);
            $labelStruct->setType((int) $label['LABEL_TYPE']);

            // add hydrated struct
            $arr[] = $labelStruct;
        }

        // return them
        return $arr;
    }
}

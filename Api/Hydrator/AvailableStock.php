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

class AvailableStock extends Hydrator
{
    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data): array
    {
        // hydrated array
        $arr = [];

        // loop every stock
        foreach ($data as $availableStock) {

            // create struct
            $availableStruct = new Struct\AvailableStock();

            // flat attributes
            $availableStruct->setNumber((string) $availableStock['ARTICLE_NUMBER']);
            $availableStruct->setQuantity((int) $availableStock['AVAILABLESTOCK_QUANTITY']);

            // structs
            $availableStruct->setStore($availableStock['AVAILABLESTOCK_STORE']);

            // add hydrated struct
            $arr[] = $availableStruct;
        }

        // return them
        return $arr;
    }
}

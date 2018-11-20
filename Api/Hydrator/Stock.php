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

class Stock extends Hydrator
{
    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data): array
    {
        // hydrated array
        $arr = [];

        // loop every stock
        foreach ($data as $stock) {

            // only valid location and company
            if ($stock['STOCK_LOCATION'] === null || $stock['STOCK_COMPANY'] === null) {
                continue;
            }

            // create struct
            $stockStruct = new Struct\Stock();

            // set flat attributes
            $stockStruct->setNumber((string) $stock['ARTICLE_NUMBER']);
            $stockStruct->setQuantity((int) $stock['STOCK_QUANTITY']);
            $stockStruct->setType((string) $stock['STOCK_TYPE']);

            // structs
            $stockStruct->setLocation($stock['STOCK_LOCATION']);
            $stockStruct->setCompany($stock['STOCK_COMPANY']);

            // add hydrated struct
            $arr[] = $stockStruct;
        }

        // return them
        return $arr;
    }
}

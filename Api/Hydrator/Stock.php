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
    public function hydrate(array $data): array
    {
        $arr = [];

        foreach ($data as $stock) {
            if ($stock['STOCK_LOCATION'] === null || $stock['STOCK_COMPANY'] === null) {
                continue;
            }

            $stockStruct = new Struct\Stock();

            $stockStruct->setNumber((string) $stock['ARTICLE_NUMBER']);
            $stockStruct->setQuantity((int) $stock['STOCK_QUANTITY']);
            $stockStruct->setType((string) $stock['STOCK_TYPE']);

            $stockStruct->setLocation($stock['STOCK_LOCATION']);
            $stockStruct->setCompany($stock['STOCK_COMPANY']);

            $arr[] = $stockStruct;
        }

        return $arr;
    }
}

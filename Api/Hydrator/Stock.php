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
            $stockStruct = new Struct\Stock();

            $stockStruct->setCompany((int) $stock['ARTICLE_COMPANY']);
            $stockStruct->setNumber((string) $stock['ARTICLE_NUMBER']);
            $stockStruct->setLocation((string) $stock['STOCK_LOCATION']);
            $stockStruct->setQuantity((int) $stock['STOCK_AMOUNT']);

            $arr[] = $stockStruct;
        }

        return $arr;
    }
}

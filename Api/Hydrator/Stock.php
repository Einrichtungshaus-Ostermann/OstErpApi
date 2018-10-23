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



            $stockStruct->setNumber((string) $stock['ARTICLE_NUMBER']);
            $stockStruct->setQuantity((int) $stock['STOCK_QUANTITY']);
            $stockStruct->setType((string) $stock['STOCK_TYPE']);

            
            if ($stock['STOCK_LOCATION'] !== null) {
                $stockStruct->setLocation($stock['STOCK_LOCATION']);
            }


            if ($stock['STOCK_COMPANY'] !== null) {
                $stockStruct->setCompany($stock['STOCK_COMPANY']);
            }




            $arr[] = $stockStruct;
        }

        return $arr;
    }
}

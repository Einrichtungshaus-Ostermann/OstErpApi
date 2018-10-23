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
    public function hydrate(array $data): array
    {
        $arr = [];

        foreach ($data as $stock) {
            $reservationStruct = new Struct\AvailableStock();



            $reservationStruct->setNumber((string) $stock['ARTICLE_NUMBER']);
            $reservationStruct->setQuantity((int) $stock['AVAILABLE_STOCK_QUANTITY']);

            if ($stock['AVAILABLE_STOCK_STORE'] !== null) {
                $reservationStruct->setStore($stock['AVAILABLE_STOCK_STORE']);
            }

            $arr[] = $reservationStruct;
        }

        return $arr;
    }
}

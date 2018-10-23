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

        foreach ($data as $availableStock) {
            $availableStruct = new Struct\AvailableStock();



            $availableStruct->setNumber((string) $availableStock['ARTICLE_NUMBER']);
            $availableStruct->setQuantity((int) $availableStock['AVAILABLESTOCK_QUANTITY']);


            $availableStruct->setStore($availableStock['AVAILABLESTOCK_STORE']);



            $arr[] = $availableStruct;
        }

        return $arr;
    }
}

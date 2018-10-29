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

class Store extends Hydrator
{
    public function hydrate(array $data): array
    {
        $arr = [];

        foreach ($data as $store) {
            $storeStruct = new Struct\Store();


            $storeStruct->setKey((string)$store['STORE_KEY']);
            $storeStruct->setName((string)$store['STORE_NAME']);

            $storeStruct->setCompany($store['STORE_COMPANY']);
            $storeStruct->setCity((string)$store['STORE_CITY']);
            $storeStruct->setType((int)$store['STORE_TYPE']);



            $arr[] = $storeStruct;
        }

        return $arr;
    }
}

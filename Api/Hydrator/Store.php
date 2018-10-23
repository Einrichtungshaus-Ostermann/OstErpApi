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



            $storeStruct->setKey($store['STORE_KEY']);
            $storeStruct->setName($store['STORE_NAME']);



            $arr[] = $storeStruct;
        }

        return $arr;
    }
}

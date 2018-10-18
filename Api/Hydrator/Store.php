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

        foreach ($data as $location) {
            $storeStruct = new Struct\Store();

            $storeStruct->setCompany((int) $location['COMPANY']);
            $storeStruct->setKey($location['STORE_KEY']);
            $storeStruct->setName($location['STORE_NAME']);

            $arr[] = $storeStruct;
        }

        return $arr;
    }
}

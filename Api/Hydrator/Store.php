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
    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data): array
    {
        // hydrated array
        $arr = [];

        // loop every store
        foreach ($data as $store) {

            // create struct
            $storeStruct = new Struct\Store();

            // set flat attributes
            $storeStruct->setKey((string) $store['STORE_KEY']);
            $storeStruct->setName((string) $store['STORE_NAME']);
            $storeStruct->setCity((string) $store['STORE_CITY']);
            $storeStruct->setType((int) $store['STORE_TYPE']);

            // structs
            $storeStruct->setCompany($store['STORE_COMPANY']);

            // add hydrated struct
            $arr[] = $storeStruct;
        }

        // return them
        return $arr;
    }
}

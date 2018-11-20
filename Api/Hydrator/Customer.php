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

class Customer extends Hydrator
{
    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data): array
    {
        // hydrated array
        $arr = [];

        // loop every customer
        foreach ($data as $customer) {

            // create struct
            $customerStruct = new Struct\Customer();

            // flat attributes
            $customerStruct->setNumber((int) $customer['CUSTOMER_NUMBER']);
            $customerStruct->setSalutation((string) $customer['CUSTOMER_SALUTATION']);
            $customerStruct->setFirstName((string) $customer['CUSTOMER_FIRSTNAME']);
            $customerStruct->setLastName((string) $customer['CUSTOMER_LASTNAME']);
            $customerStruct->setPhone((string) $customer['CUSTOMER_PHONE']);
            $customerStruct->setStreet((string) $customer['CUSTOMER_STREET']);
            $customerStruct->setZip((string) $customer['CUSTOMER_ZIP']);
            $customerStruct->setCity((string) $customer['CUSTOMER_CITY']);
            $customerStruct->setCountry((string) $customer['CUSTOMER_COUNTRY']);

            // add hydrated struct
            $arr[] = $customerStruct;
        }

        // return them
        return $arr;
    }
}

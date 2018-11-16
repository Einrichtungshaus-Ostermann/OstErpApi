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

namespace OstErpApi\Api\Gateway\Mock;

use OstErpApi\Api\Gateway\Gateway;

class Customer extends Gateway
{
    protected static $data = [
        [
            'CUSTOMER_NUMBER'     => '123456',
            'CUSTOMER_SALUTATION'   => '02',
            'CUSTOMER_FIRSTNAME'   => 'Eike',
            'CUSTOMER_LASTNAME'   => 'Brandt-Warneke',
            'CUSTOMER_PHONE'   => '01234 56789',
            'CUSTOMER_STREET'   => 'Trienendorfer Straße 142',
            'CUSTOMER_ZIP'   => '58300',
            'CUSTOMER_CITY'   => 'Wetter',
            'CUSTOMER_COUNTRY'   => 'D',
        ],

        [
            'CUSTOMER_NUMBER'     => '112233',
            'CUSTOMER_SALUTATION'   => '02',
            'CUSTOMER_FIRSTNAME'   => 'Dominik',
            'CUSTOMER_LASTNAME'   => 'Gantenberg',
            'CUSTOMER_PHONE'   => '',
            'CUSTOMER_STREET'   => 'Keinestr. 123',
            'CUSTOMER_ZIP'   => '12345',
            'CUSTOMER_CITY'   => 'Stadt',
            'CUSTOMER_COUNTRY'   => 'D',
        ],


        [
            'CUSTOMER_NUMBER'     => '445566',
            'CUSTOMER_SALUTATION'   => '01',
            'CUSTOMER_FIRSTNAME'   => 'Amelie',
            'CUSTOMER_LASTNAME'   => 'Hochmuth',
            'CUSTOMER_PHONE'   => '0042 2695 4789',
            'CUSTOMER_STREET'   => 'Coole Straße 1',
            'CUSTOMER_ZIP'   => '9874',
            'CUSTOMER_CITY'   => 'Wien',
            'CUSTOMER_COUNTRY'   => 'A',
        ],











    ];




    public function findBy(array $params = []): array
    {



        $data = $this->findInArray(
            static::$data,
            $params
        );

        return $data;
    }
}

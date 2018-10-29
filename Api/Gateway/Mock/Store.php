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

class Store extends Gateway
{
    private static $data = [

        [
            'STORE_KEY'     => '01',
            'STORE_NAME'    => 'Ostermann Witten',
            'STORE_CITY'    => 'Witten',
            'STORE_COMPANY' => '1',
            'STORE_TYPE'    => '1'
        ],
        [
            'STORE_KEY'     => '02',
            'STORE_NAME'    => 'Ostermann Haan',
            'STORE_CITY'    => 'Haan',
            'STORE_COMPANY' => '1',
            'STORE_TYPE'    => '1'
        ],
        [
            'STORE_KEY'     => '03',
            'STORE_NAME'    => 'Ostermann Recklinghausen',
            'STORE_CITY'    => 'Recklinghausen',
            'STORE_COMPANY' => '1',
            'STORE_TYPE'    => '1'
        ],
        [
            'STORE_KEY'     => '07',
            'STORE_NAME'    => 'Ostermann Bottrop',
            'STORE_CITY'    => 'Bottrop',
            'STORE_COMPANY' => '1',
            'STORE_TYPE'    => '1'
        ],
        [
            'STORE_KEY'     => '11',
            'STORE_NAME'    => 'Ostermann Leverkusen',
            'STORE_CITY'    => 'Leverkusen',
            'STORE_COMPANY' => '1',
            'STORE_TYPE'    => '1'
        ],

        [
            'STORE_KEY'     => '86',
            'STORE_NAME'    => 'Ostermann OMS',
            'STORE_CITY'    => 'OMS',
            'STORE_COMPANY' => '1',
            'STORE_TYPE'    => '2'
        ],
        [
            'STORE_KEY'     => '96',
            'STORE_NAME'    => 'Ostermann Online Shop',
            'STORE_CITY'    => 'Online Shop',
            'STORE_COMPANY' => '1',
            'STORE_TYPE'    => '2'
        ],


        [
            'STORE_KEY'     => '04',
            'STORE_NAME'    => 'Trends Witten',
            'STORE_CITY'    => 'Witten',
            'STORE_COMPANY' => '3',
            'STORE_TYPE'    => '1'
        ],
        [
            'STORE_KEY'     => '05',
            'STORE_NAME'    => 'Trends Haan',
            'STORE_CITY'    => 'Haan',
            'STORE_COMPANY' => '3',
            'STORE_TYPE'    => '1'
        ],
        [
            'STORE_KEY'     => '06',
            'STORE_NAME'    => 'Trends Recklinghausen',
            'STORE_CITY'    => 'Recklinghausen',
            'STORE_COMPANY' => '3',
            'STORE_TYPE'    => '1'
        ],
        [
            'STORE_KEY'     => '08',
            'STORE_NAME'    => 'Trends Bottrop',
            'STORE_CITY'    => 'Bottrop',
            'STORE_COMPANY' => '3',
            'STORE_TYPE'    => '1'
        ],
        [
            'STORE_KEY'     => '12',
            'STORE_NAME'    => 'Trends Leverkusen',
            'STORE_CITY'    => 'Leverkusen',
            'STORE_COMPANY' => '3',
            'STORE_TYPE'    => '1'
        ],

        [
            'STORE_KEY'     => '87',
            'STORE_NAME'    => 'Trends OMS',
            'STORE_CITY'    => 'OMS',
            'STORE_COMPANY' => '3',
            'STORE_TYPE'    => '2'
        ],
        [
            'STORE_KEY'     => '97',
            'STORE_NAME'    => 'Trends Online Shop',
            'STORE_CITY'    => 'Online Shop',
            'STORE_COMPANY' => '3',
            'STORE_TYPE'    => '2'
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

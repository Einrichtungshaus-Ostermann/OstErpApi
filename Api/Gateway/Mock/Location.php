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

class Location extends Gateway
{
    protected static $data = [
        [
            'LOCATION_KEY'     => '100',
            'LOCATION_STORE'   => 'WITTEN',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '150',
            'LOCATION_STORE'   => 'WITTEN',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '400',
            'LOCATION_STORE'   => 'WITTEN',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '500',
            'LOCATION_STORE'   => 'LEVERKUSEN',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '501',
            'LOCATION_STORE'   => 'LEVERKUSEN',
            'LOCATION_COMPANY' => '1',
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

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
            'STORE_KEY'        => 'WITTEN',
            'STORE_NAME'       => 'Witten'
        ],
        [
            'STORE_KEY'        => 'LEVERKUSEN',
            'STORE_NAME'       => 'Leverkusen'

        ],
        [
            'STORE_KEY'        => 'HAAN',
            'STORE_NAME'       => 'Haan'

        ]
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

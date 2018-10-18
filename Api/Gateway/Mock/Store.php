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
    public function findBy(array $parameters = []): array
    {
        return [
            [
                'STORE_COMPANY' => '1',
                'STORE_KEY'     => 'WITTEN',
                'STORE_NAME'    => 'Witten',
            ],
            [
                'STORE_COMPANY' => '1',
                'STORE_KEY'     => 'LEVERKUSEN',
                'STORE_NAME'    => 'Leverkusen',
            ],
            [
                'STORE_COMPANY' => '1',
                'STORE_KEY'     => 'RECKLINGHAUSEN',
                'STORE_NAME'    => 'Recklinghause',
            ],
            [
                'STORE_COMPANY' => '1',
                'STORE_KEY'     => 'BOTTROP',
                'STORE_NAME'    => 'Bottrop',
            ],
            [
                'STORE_COMPANY' => '1',
                'STORE_KEY'     => 'LEVERKUSEN',
                'STORE_NAME'    => 'Leverkusen',
            ]
        ];
    }
}

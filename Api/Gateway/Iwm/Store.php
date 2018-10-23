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

namespace OstErpApi\Api\Gateway\Iwm;

class Store extends Gateway
{
    const STORES = [
        [
            'STORE_KEY'        => 'WITTEN',
            'STORE_NAME'       => 'Witten',
            'LOCATION_NUMBERS' => [
                ['NUMBER_KEY' => 100],
                ['NUMBER_KEY' => 150],
                ['NUMBER_KEY' => 400],
                ['NUMBER_KEY' => 450],
                ['NUMBER_KEY' => 900],
            ]
        ],
        [
            'STORE_KEY'        => 'LEVERKUSEN',
            'STORE_NAME'       => 'Leverkusen',
            'LOCATION_NUMBERS' => [
                ['NUMBER_KEY' => 500],
                ['NUMBER_KEY' => 550],
                ['NUMBER_KEY' => 501],
                ['NUMBER_KEY' => 250],
                ['NUMBER_KEY' => 200],
            ]

        ],

        [
            'STORE_KEY'        => 'RECKLINGHAUSEN',
            'STORE_NAME'       => 'Recklinghause',
            'LOCATION_NUMBERS' => [
                ['NUMBER_KEY' => 600],
                ['NUMBER_KEY' => 615],
                ['NUMBER_KEY' => 315],
            ]

        ],



        [
            'STORE_KEY'        => 'BOTTROP',
            'STORE_NAME'       => 'Bottrop',
            'LOCATION_NUMBERS' => [
                ['NUMBER_KEY' => 800],
                ['NUMBER_KEY' => 850],
                ['NUMBER_KEY' => 700],
                ['NUMBER_KEY' => 750],
            ]

        ],



        [
            'STORE_KEY'        => 'LEVERKUSEN',
            'STORE_NAME'       => 'Leverkusen',
            'LOCATION_NUMBERS' => [
                ['NUMBER_KEY' => 660],
                ['NUMBER_KEY' => 665],
                ['NUMBER_KEY' => 950],
                ['NUMBER_KEY' => 365],
            ]

        ]
    ];

    public function findBy(array $parameters = []): array
    {
        return self::STORES;
    }
}

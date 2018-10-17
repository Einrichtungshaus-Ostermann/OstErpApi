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
    /**
     * Anything is ok,  we just dont want that the db is initialized
     *
     * @var array
     */
    protected static $db = [];



    public function findBy(array $parameters = []): array
    {
        return [
            [
                'LOCATION_KEY'     => 'WITTEN',
                'LOCATION_NAME'    => 'Witten',
                'LOCATION_NUMBERS' => [
                    ['NUMBER_KEY' => 100],
                    ['NUMBER_KEY' => 150],
                    ['NUMBER_KEY' => 400],
                    ['NUMBER_KEY' => 450],
                    ['NUMBER_KEY' => 900],
                ]
            ],
            [
                'LOCATION_KEY'     => 'LEVERKUSEN',
                'LOCATION_NAME'    => 'Leverkusen',
                'LOCATION_NUMBERS' => [
                    ['NUMBER_KEY' => 500],
                    ['NUMBER_KEY' => 550],
                    ['NUMBER_KEY' => 501],
                    ['NUMBER_KEY' => 250],
                    ['NUMBER_KEY' => 200],
                ]

            ],

            [
                'LOCATION_KEY'     => 'RECKLINGHAUSEN',
                'LOCATION_NAME'    => 'Recklinghause',
                'LOCATION_NUMBERS' => [
                    ['NUMBER_KEY' => 600],
                    ['NUMBER_KEY' => 615],
                    ['NUMBER_KEY' => 315],
                ]

            ],



            [
                'LOCATION_KEY'     => 'BOTTROP',
                'LOCATION_NAME'    => 'Bottrop',
                'LOCATION_NUMBERS' => [
                    ['NUMBER_KEY' => 800],
                    ['NUMBER_KEY' => 850],
                    ['NUMBER_KEY' => 700],
                    ['NUMBER_KEY' => 750],
                ]

            ],



            [
                'LOCATION_KEY'     => 'LEVERKUSEN',
                'LOCATION_NAME'    => 'Leverkusen',
                'LOCATION_NUMBERS' => [
                    ['NUMBER_KEY' => 660],
                    ['NUMBER_KEY' => 665],
                    ['NUMBER_KEY' => 950],
                    ['NUMBER_KEY' => 365],
                ]

            ]
        ];
    }
}

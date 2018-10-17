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
    public function findBy( array $parameters = array()): array
    {


        return [
            [
                'LOCATION_KEY' => 'WITTEN',
                'LOCATION_NAME' => 'Witten',
                'LOCATION_NUMBERS' => array(
                    array( 'NUMBER_KEY' => 100 ),
                    array( 'NUMBER_KEY' => 150 ),
                    array( 'NUMBER_KEY' => 400 ),
                    array( 'NUMBER_KEY' => 450 ),
                    array( 'NUMBER_KEY' => 900 ),
                )
            ],
            [
                'LOCATION_KEY' => 'LEVERKUSEN',
                'LOCATION_NAME' => 'Leverkusen',
                'LOCATION_NUMBERS' => array(
                    array( 'NUMBER_KEY' => 500 ),
                    array( 'NUMBER_KEY' => 550 ),
                    array( 'NUMBER_KEY' => 501 ),
                    array( 'NUMBER_KEY' => 250 ),
                    array( 'NUMBER_KEY' => 200 ),
                )

            ],

            [
                'LOCATION_KEY' => 'RECKLINGHAUSEN',
                'LOCATION_NAME' => 'Recklinghause',
                'LOCATION_NUMBERS' => array(
                    array( 'NUMBER_KEY' => 600 ),
                    array( 'NUMBER_KEY' => 615 ),
                    array( 'NUMBER_KEY' => 315 ),
                )

            ],



            [
                'LOCATION_KEY' => 'BOTTROP',
                'LOCATION_NAME' => 'Bottrop',
                'LOCATION_NUMBERS' => array(
                    array( 'NUMBER_KEY' => 800 ),
                    array( 'NUMBER_KEY' => 850 ),
                    array( 'NUMBER_KEY' => 700 ),
                    array( 'NUMBER_KEY' => 750 ),
                )

            ],



            [
                'LOCATION_KEY' => 'LEVERKUSEN',
                'LOCATION_NAME' => 'Leverkusen',
                'LOCATION_NUMBERS' => array(
                    array( 'NUMBER_KEY' => 660 ),
                    array( 'NUMBER_KEY' => 665 ),
                    array( 'NUMBER_KEY' => 950 ),
                    array( 'NUMBER_KEY' => 365 ),
                )

            ]
        ];

    }
}

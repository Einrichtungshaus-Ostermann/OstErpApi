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

use OstErpApi\Api\Gateway\Gateway;

class Location extends Gateway
{
    public function findBy( array $parameters = array()): array
    {



        return [
            [
                'location_key' => 'WITTEN',
                'location_name' => 'Witten',
                'location_numbers' => array(
                    array( 'number_key' => 100 ),
                    array( 'number_key' => 150 ),
                    array( 'number_key' => 400 ),
                    array( 'number_key' => 450 ),
                    array( 'number_key' => 900 ),
                )
            ],
            [
                'location_key' => 'LEVERKUSEN',
                'location_name' => 'Leverkusen',
                'location_numbers' => array(
                    array( 'number_key' => 500 ),
                    array( 'number_key' => 550 ),
                    array( 'number_key' => 501 ),
                    array( 'number_key' => 250 ),
                    array( 'number_key' => 200 ),
                )

            ],

            [
                'location_key' => 'RECKLINGHAUSEN',
                'location_name' => 'Recklinghause',
                'location_numbers' => array(
                    array( 'number_key' => 600 ),
                    array( 'number_key' => 615 ),
                    array( 'number_key' => 315 ),
                )

            ],



            [
                'location_key' => 'BOTTROP',
                'location_name' => 'Bottrop',
                'location_numbers' => array(
                    array( 'number_key' => 800 ),
                    array( 'number_key' => 850 ),
                    array( 'number_key' => 700 ),
                    array( 'number_key' => 750 ),
                )

            ],



            [
                'location_key' => 'LEVERKUSEN',
                'location_name' => 'Leverkusen',
                'location_numbers' => array(
                    array( 'number_key' => 660 ),
                    array( 'number_key' => 665 ),
                    array( 'number_key' => 950 ),
                    array( 'number_key' => 365 ),
                )

            ]
        ];

    }
}

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
    public function findBy(array $parameters = []): array
    {
        return [
            [
                'LOCATION_KEY' => 100,
                'STORE_KEY'    => 'WITTEN'
            ],
            [
                'LOCATION_KEY' => 150,
                'STORE_KEY'    => 'WITTEN'
            ],
            [
                'LOCATION_KEY' => 400,
                'STORE_KEY'    => 'WITTEN'
            ],
            [
                'LOCATION_KEY' => 450,
                'STORE_KEY'    => 'WITTEN'
            ],
            [
                'LOCATION_KEY' => 900,
                'STORE_KEY'    => 'WITTEN'
            ],
            [
                'LOCATION_KEY' => 500,
                'STORE_KEY'    => 'LEVERKUSEN'
            ],
            [
                'LOCATION_KEY' => 550,
                'STORE_KEY'    => 'LEVERKUSEN'
            ],
            [
                'LOCATION_KEY' => 501,
                'STORE_KEY'    => 'LEVERKUSEN'
            ],
            [
                'LOCATION_KEY' => 250,
                'STORE_KEY'    => 'LEVERKUSEN'
            ],
            [
                'LOCATION_KEY' => 200,
                'STORE_KEY'    => 'LEVERKUSEN'
            ],
            [
                'LOCATION_KEY' => 600,
                'STORE_KEY'    => 'RECKLINGHAUSEN'
            ],
            [
                'LOCATION_KEY' => 615,
                'STORE_KEY'    => 'RECKLINGHAUSEN'
            ],
            [
                'LOCATION_KEY' => 315,
                'STORE_KEY'    => 'RECKLINGHAUSEN'
            ],
            [
                'LOCATION_KEY' => 800,
                'STORE_KEY'    => 'BOTTROP'
            ],
            [
                'LOCATION_KEY' => 850,
                'STORE_KEY'    => 'BOTTROP'
            ],
            [
                'LOCATION_KEY' => 700,
                'STORE_KEY'    => 'BOTTROP'
            ],
            [
                'LOCATION_KEY' => 750,
                'STORE_KEY'    => 'BOTTROP'
            ],
            [
                'LOCATION_KEY' => 660,
                'STORE_KEY'    => 'LEVERKUSEN'
            ],
            [
                'LOCATION_KEY' => 665,
                'STORE_KEY'    => 'LEVERKUSEN'
            ],
            [
                'LOCATION_KEY' => 950,
                'STORE_KEY'    => 'LEVERKUSEN'
            ],
            [
                'LOCATION_KEY' => 365,
                'STORE_KEY'    => 'LEVERKUSEN'
            ],
        ];
    }
}

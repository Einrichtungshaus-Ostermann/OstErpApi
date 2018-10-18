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
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 100,
                'LOCATION_STORE'    => 'WITTEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 150,
                'LOCATION_STORE'    => 'WITTEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 400,
                'LOCATION_STORE'    => 'WITTEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 450,
                'LOCATION_STORE'    => 'WITTEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 900,
                'LOCATION_STORE'    => 'WITTEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 500,
                'LOCATION_STORE'    => 'LEVERKUSEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 550,
                'LOCATION_STORE'    => 'LEVERKUSEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 501,
                'LOCATION_STORE'    => 'LEVERKUSEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 250,
                'LOCATION_STORE'    => 'LEVERKUSEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 200,
                'LOCATION_STORE'    => 'LEVERKUSEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 600,
                'LOCATION_STORE'    => 'RECKLINGHAUSEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 615,
                'LOCATION_STORE'    => 'RECKLINGHAUSEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 315,
                'LOCATION_STORE'    => 'RECKLINGHAUSEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 800,
                'LOCATION_STORE'    => 'BOTTROP'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 850,
                'LOCATION_STORE'    => 'BOTTROP'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 700,
                'LOCATION_STORE'    => 'BOTTROP'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 750,
                'LOCATION_STORE'    => 'BOTTROP'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 660,
                'LOCATION_STORE'    => 'LEVERKUSEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 665,
                'LOCATION_STORE'    => 'LEVERKUSEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 950,
                'LOCATION_STORE'    => 'LEVERKUSEN'
            ],
            [
                'COMPANY'           => '1',
                'LOCATION_KEY'      => 365,
                'LOCATION_STORE'    => 'LEVERKUSEN'
            ],
        ];
    }
}

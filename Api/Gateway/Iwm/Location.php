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

class Location extends IwmGateway
{
    const LOCATIONS = [
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 100,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 150,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 400,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 450,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 900,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 500,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 550,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 501,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 250,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 200,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 600,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 615,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 315,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 800,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 850,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 700,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 750,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 660,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 665,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 950,
        ],
        [
            'COMPANY'           => '1',
            'LOCATION_KEY'      => 365,
        ],
    ];

    public function findBy(array $parameters = []): array
    {
        return self::LOCATIONS;
    }
}

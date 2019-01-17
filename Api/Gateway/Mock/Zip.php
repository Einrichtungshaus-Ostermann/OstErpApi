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

class Zip extends Gateway
{
    /**
     * Some test data.
     *
     * @var array
     */
    protected $data = [
        [
            'ZIP_RANGEFROM' => '58452',
            'ZIP_RANGETO'   => '58452',
            'ZIP_CITY'      => 'WITTEN'
        ],
        [
            'ZIP_RANGEFROM' => '58465',
            'ZIP_RANGETO'   => '58468',
            'ZIP_CITY'      => 'LUEDENSCHEID'
        ],
        [
            'ZIP_RANGEFROM' => '44609',
            'ZIP_RANGETO'   => '44622',
            'ZIP_CITY'      => 'HERNE'
        ]
    ];
}

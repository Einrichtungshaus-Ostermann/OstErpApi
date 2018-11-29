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

class Consultant extends Gateway
{
    /**
     * Some test data.
     *
     * @var array
     */
    protected $data = [
        [
            'CONSULTANT_NUMBER'     => '109061',
            'CONSULTANT_NAME'       => 'Brandt-Warneke,Eike',
        ],
        [
            'CONSULTANT_NUMBER'     => '123456',
            'CONSULTANT_NAME'       => 'Gantenberg, Dominik',
        ],
        [
            'CONSULTANT_NUMBER'     => '112233',
            'CONSULTANT_NAME'       => 'Windelschmidt,Tim',
        ]
    ];
}

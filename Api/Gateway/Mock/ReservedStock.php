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

class ReservedStock extends Gateway
{
    /**
     * Some test data.
     *
     * @var array
     */
    protected $data = [
        [
            'ARTICLE_NUMBER'         => '811243',
            'RESERVEDSTOCK_COMPANY'  => '1',
            'RESERVEDSTOCK_LOCATION' => '150',
            'RESERVEDSTOCK_QUANTITY' => '1',
        ]
    ];
}

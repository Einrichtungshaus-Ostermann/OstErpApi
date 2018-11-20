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

class Stock extends Gateway
{
    /**
     * Some test data.
     *
     * @var array
     */
    protected $data = [
        [
            'STOCK_COMPANY'  => '1',
            'STOCK_LOCATION' => '400',
            'ARTICLE_NUMBER' => '811243',
            'STOCK_QUANTITY' => '25',
            'STOCK_TYPE'     => 'L',
        ],
        [
            'STOCK_COMPANY'  => '1',
            'STOCK_LOCATION' => '400',
            'ARTICLE_NUMBER' => '811243',
            'STOCK_QUANTITY' => '5',
            'STOCK_TYPE'     => 'K',
        ],
        [
            'STOCK_COMPANY'  => '1',
            'STOCK_LOCATION' => '400',
            'ARTICLE_NUMBER' => '811243',
            'STOCK_QUANTITY' => '3',
            'STOCK_TYPE'     => 'P',
        ],
        [
            'STOCK_COMPANY'  => '1',
            'STOCK_LOCATION' => '501',
            'ARTICLE_NUMBER' => '811243',
            'STOCK_QUANTITY' => '3',
            'STOCK_TYPE'     => 'L',
        ]
    ];
}

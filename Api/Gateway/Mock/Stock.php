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
            'STOCK_AREA'     => '3000',
        ],
        [
            'STOCK_COMPANY'  => '1',
            'STOCK_LOCATION' => '400',
            'ARTICLE_NUMBER' => '811243',
            'STOCK_QUANTITY' => '5',
            'STOCK_TYPE'     => 'K',
            'STOCK_AREA'     => '2433',
        ],
        [
            'STOCK_COMPANY'  => '1',
            'STOCK_LOCATION' => '400',
            'ARTICLE_NUMBER' => '811243',
            'STOCK_QUANTITY' => '3',
            'STOCK_TYPE'     => 'P',
            'STOCK_AREA'     => '8085',
        ],
        [
            'STOCK_COMPANY'  => '1',
            'STOCK_LOCATION' => '501',
            'ARTICLE_NUMBER' => '811243',
            'STOCK_QUANTITY' => '3',
            'STOCK_TYPE'     => 'L',
            'STOCK_AREA'     => '3310',
        ],
        [
            'STOCK_COMPANY'  => '1',
            'STOCK_LOCATION' => '110',
            'ARTICLE_NUMBER' => '811243',
            'STOCK_QUANTITY' => '5',
            'STOCK_TYPE'     => 'K',
            'STOCK_AREA'     => '2433',
        ],
    ];
}

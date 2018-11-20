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

class ArticleComponent extends Gateway
{
    /**
     * Some test data.
     *
     * @var array
     */
    protected $data = [
        [
            'ARTICLE_NUMBER'            => '874355',
            'ARTICLECOMPONENT_NUMBER'   => '811243',
            'ARTICLECOMPONENT_QUANTITY' => '4'
        ]
    ];
}

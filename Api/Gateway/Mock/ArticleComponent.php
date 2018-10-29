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

class ArticleComponent extends Gateway
{
    private $data = [
        [
            'ARTICLE_NUMBER'            => '874355',
            'ARTICLECOMPONENT_NUMBER'   => '811243',
            'ARTICLECOMPONENT_QUANTITY' => '4'
        ]
    ];

    public function findBy(array $params = []): array
    {
        $data = $this->findInArray(
            $this->data,
            $params
        );

        return $data;
    }
}

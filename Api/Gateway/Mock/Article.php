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

class Article extends Gateway
{
    public function findBy(array $parameters = []): array
    {
        if (empty($parameters)) {
            return [
                [
                    'COMPANY'        => '1',
                    'ARTICLE_NUMBER' => '161578',
                    'ARTICLE_NAME'   => 'Wohndecke JOOP! sandy/beige',
                    'ARTICLE_WEIGHT' => 2.3,
                ],
                [
                    'COMPANY'        => '1',
                    'ARTICLE_NUMBER' => '930392',
                    'ARTICLE_NAME'   => 'Tischleuchte rund JOOP',
                    'ARTICLE_WEIGHT' => 1.8,
                ]

            ];
        }

        return [
            [
                'COMPANY'        => '1',
                'ARTICLE_NUMBER' => $parameters['number'] ?? '161578',
                'ARTICLE_NAME'   => $parameters['name'] ?? 'Wohndecke JOOP! sandy/beige',
                'ARTICLE_WEIGHT' => 1.8,
            ]

        ];
    }
}

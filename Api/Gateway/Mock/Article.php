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
    public function findBy(array $parameters = array()): array
    {
        if (empty($parameters)) {
            return [
                [
                    '__article_number' => '161578',
                    '__article_name' => 'Wohndecke JOOP! sandy/beige',
                    '__article_weight' => 2.3,
                    '__article_stock' => [
                        [
                            '__stock_location' => 'WITTEN',
                            '__stock_stock' => 1
                        ],
                        [
                            '__stock_location' => 'LEVERKUSEN',
                            '__stock_stock' => 12
                        ]

                    ]
                ],
                [
                    '__article_number' => '930392',
                    '__article_name' => 'Tischleuchte rund JOOP',
                    '__article_weight' => 1.8,
                    '__article_stock' => [
                        [
                            '__stock_location' => 'WITTEN',
                            '__stock_stock' => 2
                        ],
                        [
                            '__stock_location' => 'BOTTROP',
                            '__stock_stock' => 3
                        ]

                    ]
                ]

            ];
        }

        return [
            [
                '__article_number' => $parameters['number'] ?? '161578',
                '__article_name' => $parameters['name'] ?? 'Wohndecke JOOP! sandy/beige',
                '__article_weight' => 1.8,
                '__article_stock' => [
                    [
                        '__stock_location' => 'WITTEN',
                        '__stock_stock' => 1
                    ],
                    [
                        '__stock_location' => 'LEVERKUSEN',
                        '__stock_stock' => 12
                    ]

                ]
            ]

        ];
    }
}

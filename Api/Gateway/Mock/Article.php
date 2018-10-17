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
                    'article_number' => '161578',
                    'article_name' => 'Wohndecke JOOP! sandy/beige',
                    'article_weight' => 2.3,
                    'article_stock' => [
                        [
                            'stock_location' => 'WITTEN',
                            'stock_stock' => 1
                        ],
                        [
                            'stock_location' => 'LEVERKUSEN',
                            'stock_stock' => 12
                        ]

                    ]
                ],
                [
                    'article_number' => '930392',
                    'article_name' => 'Tischleuchte rund JOOP',
                    'article_weight' => 1.8,
                    'article_stock' => [
                        [
                            'stock_location' => 'WITTEN',
                            'stock_stock' => 2
                        ],
                        [
                            'stock_location' => 'BOTTROP',
                            'stock_stock' => 3
                        ]

                    ]
                ]

            ];
        }

        return [
            [
                'article_number' => $parameters['number'] ?? '161578',
                'article_name' => $parameters['name'] ?? 'Wohndecke JOOP! sandy/beige',
                'article_weight' => 1.8,
                'article_stock' => [
                    [
                        'stock_location' => 'WITTEN',
                        'stock_stock' => 1
                    ],
                    [
                        'stock_location' => 'LEVERKUSEN',
                        'stock_stock' => 12
                    ]

                ]
            ]

        ];
    }
}

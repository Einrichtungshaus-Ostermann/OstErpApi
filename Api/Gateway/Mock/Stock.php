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

class Stock extends Gateway
{
    public function findBy(array $parameters = []): array
    {



        return [
            [

                'ARTICLE_NUMBER' => '161578',
                'STOCK_QUANTITY' => 1337,
                'STOCK_LOCATION' => 100,
                'STOCK_TYPE'     => 'L'
            ]
        ];
    }
}

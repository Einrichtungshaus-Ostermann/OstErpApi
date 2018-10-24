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

class ReservedStock extends Gateway
{




    private $data = [
        [
            'ARTICLE_NUMBER'      => "811243",
            'RESERVEDSTOCK_COMPANY'      => "1",
            'RESERVEDSTOCK_LOCATION'      => "150",
            'RESERVEDSTOCK_QUANTITY'      => "1",
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

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

namespace OstErpApi\Api\Gateway\Iwm;

class ReservedStock extends Gateway
{
    protected function getQuery()
    {
        $query = '
            SELECT 
                [reservedstock.company],
                [reservedstock.number],
                [reservedstock.location],
                [reservedstock.quantity]
            FROM IWMV2R1DTA.VRES00
            
        ';

        return $query;
    }



    protected function addParams(array $params)
    {
        $parameters[] = 'VRRSTT = 1';
        $parameters[] = "VRSTAT = 'A'";
    }
}

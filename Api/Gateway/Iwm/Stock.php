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

class Stock extends Gateway
{

    protected function getQuery()
    {
        $query = '
            SELECT 
            [stock.company],
            [stock.number],
            [stock.location],
            [stock.quantity],
            [stock.type]
            FROM IWMV2R1DTA.LBST00
            
        ';

        return $query;
    }




    protected function addParams( array $params )
    {



        $parameters[] = "LBSTAT = 'A'";

    }







}

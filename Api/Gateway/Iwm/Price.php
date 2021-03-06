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

class Price extends Gateway
{
    /**
     * {@inheritdoc}
     */
    protected function getQuery():string
    {
        $query = '
            SELECT 
                [price.number],
                [price.startdate],
                [price.enddate],
                [price.pickupprice],
                [price.deliveryprice],
                [price.fullserviceprice],
                [price.pickuppseudoprice],
                [price.deliverypseudoprice],
                [price.fullservicepseudoprice],
                [price.company],
                [price.store]
            FROM IWMV2R1DTA.PREI00
        ';

        return $query;
    }

    /**
     * {@inheritdoc}
     */
    protected function addParams(array $params)
    {
        // only active prices
        $parameters[] = "PRSTAT = 'A'";
    }
}

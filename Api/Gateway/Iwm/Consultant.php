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

class Consultant extends Gateway
{
    /**
     * {@inheritdoc}
     */
    protected function getQuery(): string
    {
        $query = '
            SELECT 
                [consultant.number],
                [consultant.name]
            FROM IWMV2R1SYS.BNZR00
        ';

        return $query;
    }

    /**
     * {@inheritdoc}
     */
    protected function addParams(array $params)
    {
        // only active consultant
        $parameters[] = "BNSTAT = 'A'";
    }
}

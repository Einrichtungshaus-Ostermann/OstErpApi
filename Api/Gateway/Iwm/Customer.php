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

class Customer extends Gateway
{
    /**
     * {@inheritdoc}
     */
    protected function getQuery(): string
    {
        $query = '
            SELECT 
                [customer.number],
                [customer.salutation],
                [customer.firstname],
                [customer.lastname],
                [customer.phone],
                [customer.street],
                [customer.zip],
                [customer.city],
                [customer.country]
            FROM IWMADROLIB.ADRS00
        ';

        return $query;
    }

    /**
     * {@inheritdoc}
     */
    protected function addParams(array $params)
    {
        // only active customers
        $parameters[] = "ADSTAT = 'A'";
    }
}

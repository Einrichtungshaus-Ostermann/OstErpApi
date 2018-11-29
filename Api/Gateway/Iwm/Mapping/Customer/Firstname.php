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

namespace OstErpApi\Api\Gateway\Iwm\Mapping\Customer;

use OstErpApi\Api\Gateway\Iwm\Mapping\Mapping;

class Firstname implements Mapping
{
    /**
     * {@inheritdoc}
     */
    public static function getAlias(): string
    {
        return 'CUSTOMER_FIRSTNAME';
    }

    /**
     * {@inheritdoc}
     */
    public static function getColumn(): string
    {
        return 'IWMADROLIB.ADRS00.ADAVOR';
    }
}
